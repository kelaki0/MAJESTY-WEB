<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/styles.css">
    <title>Majesty Electricals - Your Source for Quality Electrical Products</title>
    <meta name="description" content="Find the best electrical products and accessories at Majesty Electricals. We offer a wide selection of lighting, pipes, and more for your home or business.">

</head>

<body>
<!--=============== HEADER ===============--> 
<header class="header">
    <nav class="nav container" aria-label="Primary Navigation">
        <!--=============== LOGO AND BRAND ===============-->
        <div class="nav__data">
            <a href="index.php" aria-label="Homepage">
                <img src="assets/img/logo.png" class="logo" alt="Majesty Electricals Logo">
            </a>
            <a href="index.php" class="nav-brand">MAJESTY ELECTRICALS</a>

            <!-- Mobile Menu Toggle -->
            <button class="nav__toggle" id="nav__toggle" aria-label="Toggle Navigation Menu" aria-expanded="false">
                <i class="ri-menu-line nav__burger" aria-hidden="true"></i>
                <i class="ri-close-line nav__close" aria-hidden="true"></i>
            </button>
        </div>

        <!--=============== NAVIGATION MENU ===============-->
        <div class="nav__menu" id="nav__menu" role="menu">
            <ul class="nav__list">
                <!-- Home Link -->
                <li><a href="#" class="nav__link" role="menuitem">Home</a></li>

                <!--=============== DROPDOWN: COLLECTIONS ===============-->
                <li class="dropdown__item">
                    <button class="nav__link" aria-haspopup="true" aria-expanded="false">
                        Collections 
                    </button>
                    <ul class="dropdown__menu" role="menu">
                        <!-- Submenu 1: Electrical Products -->
                        <li class="dropdown__subitem">
                            <a href="electrical_products.php" class="dropdown__link" role="menuitem">Electrical Products</a>
                            <ul class="dropdown__submenu" role="menu">
                                <li><a href="#" class="dropdown__sublink" role="menuitem">Conduit Pipes</a></li>
                                <li><a href="#" class="dropdown__sublink" role="menuitem">Payments</a></li>
                                <li><a href="#" class="dropdown__sublink" role="menuitem">Refunds</a></li>
                            </ul>
                        </li>

                        <!-- Submenu 2: Indoor Lighting -->
                        <li class="dropdown__subitem">
                            <a href="indoor_lighting.php" class="dropdown__link" role="menuitem">Indoor Lighting</a>
                            <ul class="dropdown__submenu" role="menu">
                                <li><a href="#" class="dropdown__sublink" role="menuitem">Conduit Pipes</a></li>
                                <li><a href="#" class="dropdown__sublink" role="menuitem"><i class="ri-cash-line"></i> Payments</a></li>
                                <li><a href="#" class="dropdown__sublink" role="menuitem"><i class="ri-refund-2-line"></i> Refunds</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!--=============== DROPDOWN: HELP ===============-->
                <li class="dropdown__item">
                    <button class="nav__link"  aria-expanded="false">
                        Help
                    </button>
                    <ul class="dropdown__menu" role="menu">
                        <li><a href="#" class="dropdown__link" role="menuitem"><i class="ri-user-line"></i> FAQ</a></li>
                        <li><a href="#" class="dropdown__link" role="menuitem"><i class="ri-lock-line"></i> Support</a></li>
                        <li><a href="#" class="dropdown__link" role="menuitem"><i class="ri-message-3-line"></i> Contact Us</a></li>
                    </ul>
                </li>

                <!--=============== CART LINK ===============-->
                <li><a href="#" class="nav__link" role="menuitem"><i class="ri-shopping-cart-2-fill"></i> Cart</a></li>

                <!--=============== DROPDOWN: ACCOUNT ===============-->
                <li class="dropdown__item">
                    <button class="nav__link" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-account-pin-circle-fill"></i> Account
                    </button>
                    <ul class="dropdown__menu" role="menu">
                        <li><a href="signin.php" class="dropdown__link" role="menuitem"><i class="ri-user-line"></i> Signin</a></li>
                        <li><a href="#" class="dropdown__link" role="menuitem"><i class="ri-lock-line"></i> My Account</a></li>
                        <li><a href="#" class="dropdown__link" role="menuitem"><i class="ri-message-3-line"></i> Orders</a></li>
                        <li><a href="#" class="dropdown__link" role="menuitem"><i class="ri-message-3-line"></i> Saved Items</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>


    <div class="search-social-container">
    <!-- Search Section -->
    <div class="search-container">
        <form action="search.php" method="GET" class="search-form" role="search">
            <label for="search-query" class="sr-only">Search</label> <!-- Accessible Label -->
            <input type="text" name="query" id="search-query" placeholder="What are you looking for?" class="search-input" required>
            <button type="submit" class="search-button" aria-label="Search"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <!-- Social Media Icons and Language Button -->
    <div class="social-media-container">
        <a href="https://www.facebook.com" target="_blank" class="social-icon" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.tiktok.com" target="_blank" class="social-icon" aria-label="TikTok">
            <i class="fab fa-tiktok"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="social-icon" aria-label="Twitter">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank" class="social-icon" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <button class="language-button" aria-label="Change Language">English</button>
    </div>
</div>


</body>

</html>