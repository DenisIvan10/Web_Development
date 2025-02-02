<?php
session_start();

if (!isset($_SESSION['order_id'])) {
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">
    <title>Informatii Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Informatii Client</h3>
                        <form action="order_success.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nume</label>
                                <input type="text" id="name" name="customer_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Adresa</label>
                                <textarea id="address" name="customer_address" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="payment_method" class="form-label">Metoda de Plata</label>
                                <select id="payment_method" name="payment_method" class="form-select" required>
                                    <option value="card">Card</option>
                                    <option value="numerar">Numerar</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="delivery_method" class="form-label">Metoda de Livrare</label>
                                <select id="delivery_method" name="delivery_method" class="form-select" required>
                                    <option value="Fan Courier">Fan Courier</option>
                                    <option value="Posta Romana">Posta Romana</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark">Finalizeaza Comanda</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
