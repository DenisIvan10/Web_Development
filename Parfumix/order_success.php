<?php
session_start();
require 'config.php';

if (!isset($_SESSION['order_id'], $_POST['customer_name'], $_POST['customer_address'], $_POST['payment_method'])) {
    header('Location: cart.php');
    exit();
}

$order_id = intval($_SESSION['order_id']);
$customer_name = htmlspecialchars($_POST['customer_name']);
$customer_address = htmlspecialchars($_POST['customer_address']);
$payment_method = htmlspecialchars($_POST['payment_method']);
$delivery_method = htmlspecialchars($_POST['delivery_method']);

$sql_order = "SELECT * FROM orders WHERE id = $order_id";
$result_order = $conn->query($sql_order);
$order = $result_order->fetch_assoc();

$sql_items = "SELECT * FROM order_items WHERE order_id = $order_id";
$result_items = $conn->query($sql_items);

unset($_SESSION['cart']);
unset($_SESSION['order_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">
    <title>Comanda finalizata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container my-5">
        <h1>Comanda a fost finalizata cu succes!</h1>
        <p>Va multumim pentru achizitie!</p>

        <h3>Detalii Client</h3>
        <p><strong>Nume:</strong> <?php echo $customer_name; ?></p>
        <p><strong>Adresa:</strong> <?php echo $customer_address; ?></p>
        <p><strong>Metoda de Plata:</strong> <?php echo ucfirst($payment_method); ?></p>
        <p><strong>Metoda de Livrare:</strong> <?php echo ucfirst($delivery_method); ?></p>

        <h3>Detalii Comanda</h3>
        <p><strong>Total:</strong> <?php echo $order['total_price']; ?> RON</p>
        <p><strong>Data:</strong> <?php echo $order['created_at']; ?></p>

        <h4>Produse</h4>
        <ul class="list-group">
            <?php while ($item = $result_items->fetch_assoc()): ?>
                <li class="list-group-item">
                    <?php echo htmlspecialchars($item['product_name']); ?> 
                    - <?php echo $item['quantity']; ?> x <?php echo $item['price']; ?> RON 
                    = <?php echo $item['subtotal']; ?> RON
                </li>
            <?php endwhile; ?>
        </ul>

        <a href="products.php" class="btn btn-dark mt-4">Inapoi la produse</a>
    </div>
</body>
</html>
