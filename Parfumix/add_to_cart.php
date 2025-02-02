<?php
session_start();
require 'config.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$id] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1,
                'image' => $product['image']
            ];
        }

        header('Location: cart.php');
        exit();
    } else {
        die("Produsul nu a fost gasit.");
    }
} else {
    die("Cerere invalida.");
}
?>
