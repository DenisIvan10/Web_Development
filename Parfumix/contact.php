<?php
require 'config.php';

$success = false;
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        $success = true;
    } else {
        $error = true;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/icon.png" type="image/png">
   <title>Contact - Parfumix</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include('navbar.php');
    ?>


    <header class="bg-light text-black text-center py-5">
        <h1 class="display-4">Contacteaza-ne</h1>
        <p class="lead">Suntem aici pentru a raspunde intrebarilor tale!</p>
    </header>


    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h2 class="mb-4">Trimite-ne un mesaj</h2>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nume</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Introduceti numele dvs..." required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduceti email-ul dvs..." required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subiect</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Introduceti subiectul mesajului..." required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mesaj</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Scrieti mesajul aici..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Trimite</button>
                </form>

            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Ne gasiti aici</h2>
                <div class="mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11157.73265977897!2d25.57887946571476!3d45.64212228723524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b35b7ae645555f%3A0xb703bb5d36a41691!2zUGlhyJthIFNmYXR1bHVpLCBCcmHImW92!5e0!3m2!1sro!2sro!4v1733993147615!5m2!1sro!2sro"
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <ul class="list-unstyled">
                    <li><strong>Adresa:</strong> Piata Sfatului, Centrul Vechi, Brasov</li>
                    <li><strong>Telefon:</strong> <a href="tel:+40012345678" class="text-dark text-decoration-none">+40 123 456 789</a></li>
                    <li><strong>Email:</strong> <a href="mailto:info@parfumix.ro" class="text-dark text-decoration-none">info@parfumix.ro</a></li>
                    <li><strong>Program:</strong> Luni - Vineri: 8:00 - 18:00, Sambata: 10:00 - 18:00</li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>

    <script>
        <?php if ($success): ?>
            alert("Mesajul tau a fost trimis cu succes! Multumim ca ne-ai contactat.");
        <?php elseif ($error): ?>
            alert("A aparut o eroare. Te rugam sa incerci din nou.");
        <?php endif; ?>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="live_search.js"></script>
</body>
</html>
