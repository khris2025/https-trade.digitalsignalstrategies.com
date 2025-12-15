<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GEORGE MGT COMPANY INV. </title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Flag Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css" />

    <!-- Google Font: Signika Negative -->
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: "Signika Negative", sans-serif !important;
            ;
            background-color: black;
            font-size: 14px;
        }

        nav.navbar {
            background-color: transparent !important;
        }

        .navbar-brand {
            font-size: 1.3rem;
            font-weight: bold;
            color: white !important;
            user-select: none;
            margin-right: 1rem;
        }

        .nav-link,
        .dropdown-toggle {
            color: white !important;
            cursor: pointer;
        }

        .dropdown-menu a {
            color: black !important;
        }

        .custom-hamburger {
            font-size: 1.8rem;
            color: white;
            user-select: none;
            cursor: pointer;
            margin-right: 0.75rem;
        }

        .end-items {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* Sidebar */
        .offcanvas-body a {
            color: black !important;
        }

        .offcanvas-body a:hover {
            color: #444 !important;
        }

        .offcanvas-body i {
            width: 20px;
        }

        /* Reduce offcanvas sidebar width */
        .offcanvas-start {
            width: 250px !important;
            /* smaller than default 300px */
        }

        /* Navbar left group flex */
        .navbar-left-group {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: nowrap;
        }

        /* Show desktop menus inline, always visible */
        .desktop-nav {
            display: flex !important;
            gap: 1rem;
            align-items: center;
        }

        /* Dropdown menu fixes for desktop */
        @media (max-width: 991.98px) {

            /* On mobile, hide desktop nav */
            .desktop-nav {
                display: none !important;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <style>
        nav.navbar {
            background-color: transparent;
            transition: background-color 0.3s ease;
            z-index: 1030;
        }

        nav.navbar.scrolled {
            background-color: black !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-3">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Left group -->
            <div class="navbar-left-group">
                <span
                    class="custom-hamburger"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu"
                    aria-controls="mobileMenu"
                    role="button"
                    aria-label="Toggle menu">
                    <i class="bi bi-list"></i>
                </span>
                <a class="navbar-brand mb-0" href="#" style="font-size: 1rem;">GEORGE MGT COMPANY INV. </a>

                <ul class="navbar-nav desktop-nav mb-0">
                    <!-- Your desktop nav dropdowns -->
                    <ul class="navbar-nav desktop-nav mb-0">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                            <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                                <li><a class="dropdown-item" href="/buy-crypto">Buy Crypto</a></li>
                                <li><a class="dropdown-item" href="/pages/copy-expert-traders">Copy Trading</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="marketsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Markets</a>
                            <ul class="dropdown-menu" aria-labelledby="marketsDropdown">
                                <li><a class="dropdown-item" href="/pages/forex-trading">Forex</a></li>
                                <li><a class="dropdown-item" href="/pages/crypto-trading">Crypto</a></li>
                                <li><a class="dropdown-item" href="/pages/stocks-trading">Stocks</a></li>
                            </ul>
                        </li> -->
                        <!-- Add other dropdowns here as you had before -->
                    </ul>

                </ul>
            </div>

            <!-- Right group -->
            <div class="end-items">
                <!-- <i class="bi bi-sun" style="color: white; font-size: 1.2rem; cursor:pointer;"></i>

                <div class="nav-item dropdown d-inline-block">
                    <a
                        class="nav-link dropdown-toggle d-flex align-items-center"
                        href="#"
                        id="langDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="color: white;">
                        <span class="fi fi-us me-1"></span> EN
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li><a class="dropdown-item" href="#"><span class="fi fi-us me-2"></span> EN</a></li>
                        <li><a class="dropdown-item" href="#"><span class="fi fi-it me-2"></span> IT</a></li>
                        <li><a class="dropdown-item" href="#"><span class="fi fi-in me-2"></span> HI</a></li>
                        <li><a class="dropdown-item" href="#"><span class="fi fi-es me-2"></span> ES</a></li>
                    </ul>
                </div> -->

                <a class="nav-link d-inline-block" href="https://dashboard.trade.digitalsignalstrategies.com/login" style="color: white;">
                    <i class="bi bi-box-arrow-in-right me-1"></i>login
                </a>
            </div>
        </div>
    </nav>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('nav.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>



    <!-- Sidebar Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="text-center mb-3">
                <img src="images/android-chrome-144x144.png" style="width: 100px" alt="Logo" />
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="/"><i class="bi bi-house-door"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="https://dashboard.trade.digitalsignalstrategies.com/login"><i class="bi bi-box-arrow-in-right"></i> Sign In</a></li>
                <li class="nav-item"><a class="nav-link" href="https://dashboard.trade.digitalsignalstrategies.com/register"><i class="bi bi-person-plus"></i> Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php"><i class="bi bi-envelope"></i> Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php"><i class="bi bi-info-circle"></i> About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="Hedge-Funds.php"><i class="bi bi-bank"></i> Hedge Funds</a></li>
                <li class="nav-item"><a class="nav-link" href="copy-trading.php"><i class="bi bi-people"></i> Copy Trading</a></li>
                <li class="nav-item"><a class="nav-link" href="cookie-policy.php"><i class="bi bi-shield-check"></i> Cookie Policy</a></li>
                <li class="nav-item"><a class="nav-link" href="Crypto-mining.php"><i class="bi bi-cpu"></i> Crypto Mining</a></li>
                <li class="nav-item"><a class="nav-link" href="forex-trading.php"><i class="bi bi-graph-up"></i> Forex Trading</a></li>
                <li class="nav-item"><a class="nav-link" href="Privacy-Policy.php"><i class="bi bi-shield-lock"></i> Privacy Policy</a></li>
                <li class="nav-item"><a class="nav-link" href="Bitcoin-Mining.php"><i class="bi bi-currency-bitcoin"></i> Bitcoin Mining</a></li>
                <li class="nav-item"><a class="nav-link" href="crypto-trading.php"><i class="bi bi-currency-exchange"></i> Crypto Trading</a></li>
                <li class="nav-item"><a class="nav-link" href="Stocks-Trading.php"><i class="bi bi-bar-chart-line"></i> Stocks Trading</a></li>
                <li class="nav-item"><a class="nav-link" href="Dogecoin-Mining.php"><i class="bi bi-coin"></i> Dogecoin Mining</a></li>
                <li class="nav-item"><a class="nav-link" href="tos.php"><i class="bi bi-file-text"></i> Terms of Service</a></li>
            </ul>
        </div>
    </div>