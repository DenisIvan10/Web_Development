<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">
    <title>Cos de cumparaturi - Parfumix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include('navbar.php');
    ?>


    <div class="container my-5">
        <h1 class="text-center">Cos de cumparaturi</h1>

        <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produs</th>
                        <th>Nume</th>
                        <th>Pret</th>
                        <th>Cantitate</th>
                        <th>Subtotal</th>
                        <th>Actiuni</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $total = 0;
                    foreach ($_SESSION['cart'] as $item): 
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    ?>
                    <tr>
                        <td><img src="<?php echo $item['image']; ?>" style="width: 50px; height: auto;" alt="<?php echo htmlspecialchars($item['name']); ?>"></td>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo htmlspecialchars($item['price']); ?> RON</td>
                        <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                        <td><?php echo $subtotal; ?> RON</td>
                        <td>
                            <a href="remove_from_cart.php?id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm">Elimina</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="text-end">
                <h4>Total: <?php echo $total; ?> RON</h4>
                <a href="checkout.php" class="btn btn-dark">Checkout</a>
            </div>
        <?php else: ?>
            <p class="text-center">Cosul este gol.</p>
        <?php endif; ?>
    </div>


    <?php
    include('footer.php');
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="live_search.js"></script>
</body>
</html>
