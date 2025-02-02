<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            echo "<script>window.location.href = 'home.php';</script>";
        } else {
            echo "<script>alert('Parola incorecta!');</script>";
            echo "<script>window.location.href = 'login.html';</script>";
        }
    } else {
        echo "<script>alert('Contul nu exista!');</script>";
        echo "<script>window.location.href = 'login.html';</script>";
    }
    $stmt->close();
}
$conn->close();
?>
