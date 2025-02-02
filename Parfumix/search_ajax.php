<?php
require 'config.php';

$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if (!$query) {
    echo json_encode([]);
    exit();
}

$stmt = $conn->prepare("SELECT id, name, price FROM products WHERE name LIKE ?");
$like_query = "%" . $query . "%";
$stmt->bind_param("s", $like_query);
$stmt->execute();

$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = [
        'id' => $row['id'],
        'name' => $row['name'],
        'price' => number_format($row['price'], 2)
    ];
}

echo json_encode($products);
?>
