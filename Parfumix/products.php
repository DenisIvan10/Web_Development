<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">
    <title>Produse - Parfumix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include('navbar.php');
    ?>


    <div class="container my-5">
        <h1 class="text-center mb-4 text-black"><strong>Toate Produsele</strong></h1>
        <div class="row">
            <?php include 'fetch_products.php'; ?>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="live_search.js"></script>
</body>
</html>
