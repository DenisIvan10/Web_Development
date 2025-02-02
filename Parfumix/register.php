<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password !== $confirmPassword) {
        echo "<script>alert('Parola nu este la fel ca parola confirmata!');</script>";
        echo "<script>window.location.href = 'registration.html';</script>";
    } else {
        $checkEmail = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        $checkEmail->store_result();

        if ($checkEmail->num_rows > 0) {
            echo "<script>alert('Cont-ul exista deja!');</script>";
            echo "<script>window.location.href = 'registration.html';</script>";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, password_hash($password, PASSWORD_BCRYPT));

            if ($stmt->execute()) {
                header("Location: login.html");
                exit();
            } else {
                echo "<script>alert('Eroare la creare cont!');</script>";
                echo "<script>window.location.href = 'registration.html';</script>";
            }
            $stmt->close();
        }
        $checkEmail->close();
    }
} else {
    echo "<script>alert('Datele nu au fost trimise corect!');</script>";
    echo "<script>window.location.href = 'registration.html';</script>";
}

$conn->close();
?>
