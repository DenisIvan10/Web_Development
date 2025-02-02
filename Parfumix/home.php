<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/icon.png" type="image/png">
   <title>Parfumix</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include('navbar.php');
    ?>

    
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="products.php">
                    <img src="images/cadouri.jpg" class="d-block w-100" alt="Cadouri">
                </a>
            </div>
            <div class="carousel-item">
                <a href="products.php">
                    <img src="images/rabanne.jpg" class="d-block w-100" alt="Rabanne">
                </a>
            </div>
            <div class="carousel-item">
                <a href="products.php">
                    <img src="images/essence.jpg" class="d-block w-100" alt="Essence">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    
    <div class="container text-center py-5 mb-5">
        <h1 class="mb-4"><strong>Nu rata ofertele noastre</strong></h1>
        <div id="clockdiv">
            <div>
                <span class="days" id="day"></span>
                <div class="smalltext">Zile</div>
            </div>
            <div>
                <span class="hours" id="hour"></span>
                <div class="smalltext">Ore</div>
            </div>
            <div>
                <span class="minutes" id="minute"></span>
                <div class="smalltext">Minute</div>
            </div>
            <div>
                <span class="seconds" id="second"></span>
                <div class="smalltext">Secunde</div>
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="p-3 text-black text-center rounded">
                    <img src="images/shop.svg" alt="Magazine fizice" class="img-fluid mb-2 rounded" style="width: 64px; height: auto;">
                    <h4><strong>Magazine fizice</strong></h4>
                    <p>Cu preturi la fel ca pe internet</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 text-black text-center rounded">
                    <img src="images/delivery.svg" alt="Retur produse" class="img-fluid mb-2 rounded" style="width: 64px; height: auto;">
                    <h4><strong>Garantam 90 de zile</strong></h4>
                    <p>Pentru returnarea produselor</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 text-black text-center rounded">
                    <img src="images/perfume.svg" alt="Gama Larga parfumuri" class="img-fluid mb-2 rounded" style="width: 64px; height: auto;">
                    <h4><strong>Selectie larga</strong></h4>
                    <p>De parfumuri cautate</p>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container mb-5" style="margin-top: auto;">
        <div class="row g-4 g-sm-3">
            <div class="col-md-6 text-end">
                <a href="products.php">
                    <img src="images/barbati.png" alt="barbati" class="img-fluid rounded" style="width: 600px; height: 300px;">
                </a>
            </div>
    
            <div class="col-md-6 text-start">
                <a href="products.php">
                    <img src="images/femei.png" alt="femei" class="img-fluid rounded" style="width: 600px; height: 300px;">
                </a>
            </div>
        </div>
    </div>
    


    <div class="container py-5 mb-5" style="margin-top: 100px;">
        <div class="row g-4 g-sm-3">
            <h1 class="text-center mb-4"><strong>Reduceri de neratat</strong></h1>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                        <img src="images/verf.jpg" class="card-img-top" alt="versace bright crystal" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Versace Bright Crystal</h5>
                        <p class="card-text">Eau de Toilette pentru femei</p>
                        <p class="card-text"><strong>297 RON</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                        <img src="images/opium.jpg" class="card-img-top" alt="Black Opium" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">YSL Black Opium</h5>
                        <p class="card-text">Eau de Parfum pentru femei</p>
                        <p class="card-text"><strong>609 RON</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                        <img src="images/fame.jpg" class="card-img-top" alt="Rabanne Fame" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Paco Rabanne Fame</h5>
                        <p class="card-text">Eau de Parfum pentru femei</p>
                        <p class="card-text"><strong>541 RON</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                        <img src="images/chgoodgirl.jpg" class="card-img-top" alt="good girl" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">CH Good Girl</h5>
                        <p class="card-text">Eau de Parfum pentru femei</p>
                        <p class="card-text"><strong>513 RON</strong></p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="products.php" class="btn btn-dark">Vezi mai multe produse</a>
            </div>
        </div>
    </div>


    <div class="container py-5 mb-5" style="margin-top: 100px;">
        <div class="row g-4 g-sm-3">
            <h1 class="text-center mb-4"><strong>Cele mai populare produse</strong></h1>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                        <img src="images/ver.jpg" class="card-img-top" alt="versace pour homme" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Versace Pour Homme</h5>
                        <p class="card-text">Eau de Toilette pentru barbati</p>
                        <p class="card-text"><strong>365 RON</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                        <img src="images/male.jpg" class="card-img-top" alt="jpg lemale" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">JPG Le Male</h5>
                        <p class="card-text">Eau de Toilette pentru barbati</p>
                        <p class="card-text"><strong>449 RON</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                        <img src="images/elixir.jpg" class="card-img-top" alt="jpg elixir" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">JPG Elixir</h5>
                        <p class="card-text">Parfum pentru barbati</p>
                        <p class="card-text"><strong>609 RON</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="products.php">
                    <img src="images/armani.jpg" class="card-img-top" alt="armani" style="width: 100%; height: auto;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Armani SWY Absolutely</h5>
                        <p class="card-text">Parfum pentru barbati</p>
                        <p class="card-text"><strong>562 RON</strong></p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="products.php" class="btn btn-dark">Vezi mai multe produse</a>
            </div>
        </div>
    </div>
    

    <?php
    include('footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="countdown.js"></script>
    <script src="live_search.js"></script>
</body>
</html>