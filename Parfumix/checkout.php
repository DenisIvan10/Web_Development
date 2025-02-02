<?php
session_start();
require 'config.php';

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: cart.php');
    exit();
}

$total_price = 0;
foreach ($_SESSION['cart'] as $item) {
    $total_price += $item['price'] * $item['quantity'];
}

$stmt_order = $conn->prepare("INSERT INTO orders (total_price) VALUES (?)");
$stmt_order->bind_param("d", $total_price);

if ($stmt_order->execute()) {
    $order_id = $stmt_order->insert_id;

    $stmt_item = $conn->prepare("INSERT INTO order_items (order_id, product_id, product_name, quantity, price, subtotal) VALUES (?, ?, ?, ?, ?, ?)");
    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['id'];
        $product_name = $item['name'];
        $quantity = $item['quantity'];
        $price = $item['price'];
        $subtotal = $price * $quantity;

        $stmt_item->bind_param("iisidd", $order_id, $product_id, $product_name, $quantity, $price, $subtotal);
        $stmt_item->execute();
    }

    $_SESSION['order_id'] = $order_id;
    header('Location: client_info.php');
    exit();
} else {
    die("A aparut o eroare la procesarea comenzii: " . $conn->error);
}
?>
