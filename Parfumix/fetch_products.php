<?php
require 'config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-3 mb-4 g-4">';
        echo '    <div class="card h-100">';
        echo '        <a href="product_details.php?id=' . $row['id'] . '">';
        echo '            <img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '" style="height: 250px; object-fit: cover;">';
        echo '        </a>';
        echo '        <div class="card-body text-center">';
        echo '            <h5 class="card-title">' . $row['name'] . '</h5>';
        echo '            <p class="card-text">' . $row['category'] . '</p>';
        echo '            <p class="card-text"><strong>' . $row['price'] . ' RON</strong></p>';
        echo '            <a href="product_details.php?id=' . $row['id'] . '" class="btn btn-dark">Vezi detalii</a>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo '<p class="text-center">Nu exista produse disponibile.</p>';
}

$conn->close();
?>
