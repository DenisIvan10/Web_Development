<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
        <a class="navbar-brand mx-3" href="home.php">
            <img src="images/logo-removebg.png" style="height: 50px;" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3"><a class="nav-link text-white" href="home.php">Acasa</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="products.php">Produse</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="about.php">Despre noi</a></li>
                <li class="nav-item mx-3"><a class="nav-link text-white" href="contact.php">Contact</a></li>
                
                <li class="nav-item mx-3 d-none d-lg-block">
                    <form class="container-fluid" id="search-form" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" class="form-control" id="search-input" placeholder="Cautati parfumuri..." aria-label="Search" aria-describedby="basic-addon1" style="width: 600px;">
                            <button type="submit" class="input-group-text btn btn-light" id="basic-addon1" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;">
                                <img src="images/lupa.svg" style="height: 25px;">
                            </button>
                            <div id="search-results" class="dropdown-menu w-100 shadow-sm" style="display: none; position: absolute; top: 100%; left: 0; z-index: 1050;">
                                <!-- Rezultatele vor fi afiate aici -->
                            </div>
                        </div>
                    </form>
                </li>

                <li class="nav-item mx-3 d-flex align-items-center">
                    <a href="login.html" class="ms-3">
                        <img src="images/account.svg" style="height: 30px;" alt="Account">
                    </a>
                </li>

                <li class="nav-item mx-3 d-flex align-items-center">
                    <a href="cart.php" class="ms-3">
                        <img src="images/cart.svg" style="height: 30px;" alt="Cart">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>