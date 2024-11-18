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
        <nav class="nav container">
            <div class="nav__data">
                <a href="index.php"><img src="assets/img/logo.png" class="logo" alt="logo"></a>
                <a href="index.php" class="nav-brand">MAJESTY ELECTRICALS</a>

                <div class="nav__toggle" id="nav__toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">Home</a></li>

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Collections 
                        </div>
                        <ul class="dropdown__menu">
                            <!-- DROPDOWN SUBMENU 1 -->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">Electrical Products</div>
                                <ul class="dropdown__submenu">
                                    <li><a href="#" class="dropdown__sublink">Conduit Pipes</a></li>
                                    <li><a href="#" class="dropdown__sublink"> Payments</a></li>
                                    <li><a href="#" class="dropdown__sublink"> Refunds</a></li>
                                </ul>
                            </li>

                            <!-- DROPDOWN SUBMENU 2 -->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">Indoor Lighting</div>
                                <ul class="dropdown__submenu">
                                    <li><a href="#" class="dropdown__sublink">Conduit Pipes</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-cash-line"></i> Payments</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-refund-2-line"></i> Refunds</a></li>
                                </ul>
                            </li>

                            <!-- DROPDOWN SUBMENU 3 -->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">Outdoor Lighting</div>
                                <ul class="dropdown__submenu">
                                    <li><a href="#" class="dropdown__sublink">Conduit Pipes</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-cash-line"></i> Payments</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-refund-2-line"></i> Refunds</a></li>
                                </ul>
                            </li>

                            <!-- DROPDOWN SUBMENU 4 -->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">Accessories</div>
                                <ul class="dropdown__submenu">
                                    <li><a href="#" class="dropdown__sublink">Conduit Pipes</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-cash-line"></i> Payments</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-refund-2-line"></i> Refunds</a></li>
                                </ul>
                            </li>
                            <!-- DROPDOWN SUBMENU 5 -->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">Accessories</div>
                                <ul class="dropdown__submenu">
                                    <li><a href="#" class="dropdown__sublink">Conduit Pipes</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-cash-line"></i> Payments</a></li>
                                    <li><a href="#" class="dropdown__sublink"><i class="ri-refund-2-line"></i> Refunds</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Help 
                        </div>
                        <ul class="dropdown__menu">
                            <li><a href="#" class="dropdown__link"><i class="ri-user-line"></i> FAQ</a></li>
                            <li><a href="#" class="dropdown__link"><i class="ri-lock-line"></i> Support</a></li>
                            <li><a href="#" class="dropdown__link"><i class="ri-message-3-line"></i> Contact Us</a></li>
                        </ul>
                    </li>

                    <!--=============== DROPDOWN 3 ===============-->
                    <li><a href="#" class="nav__link"><i class="ri-shopping-cart-2-fill"></i>Cart</a></li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            <i class="ri-account-pin-circle-fill"></i> Account
                        </div>
                        <ul class="dropdown__menu">
                            <li><a href="signin.php" class="dropdown__link"><i class="ri-user-line"></i> Signin</a></li>
                            <li><a href="#" class="dropdown__link"><i class="ri-lock-line"></i> My Account</a></li>
                            <li><a href="#" class="dropdown__link"><i class="ri-message-3-line"></i> Orders</a></li>
                            <li><a href="#" class="dropdown__link"><i class="ri-message-3-line"></i> Saved Items</a></li>
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
