<?php
require 'config.php';

$id = intval($_GET['id']);
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Produsul nu exista.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">
    <title><?php echo $row['name']; ?> - Parfumix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include('navbar.php');
    ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="<?php echo $row['name']; ?>" style="margin-bottom: 30px;">
            </div>
            <div class="col-md-6">
                <h1><?php echo $row['name']; ?></h1>
                <p><?php echo $row['category']; ?></p>
                <p><strong>Descrierea parfumului:</strong></p>
                <p><?php echo $row['description']; ?></p>
                <p><strong>Pret:</strong> <?php echo $row['price']; ?> RON</p>
                <p><strong>Stoc:</strong> <?php echo $row['stock']; ?></p>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-dark">Adauga in cos</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="live_search.js"></script>
</body>
</html>

<?php
$conn->close();
?>
