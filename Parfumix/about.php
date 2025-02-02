<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" type="image/png">
    <title>Despre Noi - Parfumix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include('navbar.php');
    ?>


    <header class="bg-light py-5">
        <div class="container text-center text-black">
            <h1 class="display-4">Despre Parfumix</h1>
            <p class="lead">Descopera povestea noastra si valorile care ne ghideaza.</p>
        </div>
    </header>


    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 text-center">
                <img src="images/munca.jpg" alt="Despre noi" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 text-black">
                <h2 class="mb-4">Cine suntem?</h2>
                <p>La Parfumix, suntem pasionati de esente care inspira, fascineaza si transforma momentele obisnuite in amintiri de neuitat. Cu o experienta de peste 10 ani in industria parfumurilor, ne-am propus sa oferim clientilor nostri cele mai bune produse la preturi competitive.</p>
                <p>Ne mandrim cu o gama variata de parfumuri autentice pentru femei si barbati, selectate cu grija pentru a satisface toate gusturile si preferintele.</p>
            </div>
        </div>
    </div>


    <div class="bg-light py-5">
        <div class="container text-center text-black">
            <h2 class="mb-4">Valorile noastre</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="p-3">
                        <img src="images/calitate.svg" alt="Calitate" class="mb-3" style="width: 64px;">
                        <h4>Calitate</h4>
                        <p>Oferim doar produse originale, garantand satisfactia clientilor nostri si intrecem toate asteptarile.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3">
                        <img src="images/incredere.svg" alt="Incredere" class="mb-3" style="width: 64px;">
                        <h4>Incredere</h4>
                        <p>Construim relatii bazate pe transparenta si onestitate pentru ca aici suntem toti o familie.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3">
                        <img src="images/trend.svg" alt="Inovație" class="mb-3" style="width: 64px;">
                        <h4>Inovatie</h4>
                        <p>Ne adaptam constant pentru a aduce cele mai noi tendinte in parfumerie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-black">
                <h2 class="mb-4">Misiunea noastra</h2>
                <p>Misiunea noastra este sa oferim acces la cele mai iubite parfumuri, la preturi accesibile, fara a compromite calitatea. Ne dorim sa fim alegerea principala a clientilor pentru orice ocazie care necesita un strop de rafinament. Noi credem ca frumusetea ar trebui sa fie accesibila oricui pentru ca aduce incredere si schimbari pozitive in viata fiecaruia.</p>
                <p>Oamenii care se simt mai frumosi isi ating mai usor obiectivele si fac lumea din jur mai frumoasa.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="images/noi.jpg" alt="Misiune" class="img-fluid rounded shadow">
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
