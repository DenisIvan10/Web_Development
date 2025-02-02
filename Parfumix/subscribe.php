<?php
require 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Abonarea ta a fost efectuata cu succes!');
                    window.location.href = 'home.php?success=1';
                  </script>";
        } else {
            echo "<script>
                    alert('A aparut o eroare! Te rugam sa incerci din nou.');
                    window.location.href = 'home.php?error=1';
                  </script>";
        }

        $stmt->close();
    } else {
        echo "<script>
                alert('Te rugam sa introduci o adresa de email valida.');
                window.location.href = 'home.php?error=invalid';
              </script>";
    }
}

$conn->close();
?>
