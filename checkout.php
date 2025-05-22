<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>GoDeliver - Checkout Process</title>

    <link rel="icon" href="images/favicon/icon.png">
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/all.css"/>

    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
    
<body>

    <!-- <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section> -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.php">
                <strong><span>GoDeliver</span></strong>
            </a>

            <div class="d-lg-none">

                <a href="cart.html" class="bi-cart custom-icon"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>

                <div class="d-none d-lg-block" style="position: relative;">
                    <a href="cart.php" class="bi-cart custom-icon cart-icon"><b class="cart-items"><?php $cart_items = 2; echo $cart_items;?></b></a>
                </div>
            </div>
        </div>
    </nav>


    <main>
        <div class="blur-1"></div>
        <div class="blur-2"></div>
        <section class="section-padding mt-5">
            <div class="container checkout-container">
                <form action="#" method="post">
                    <div class="biller-container">
                        <div class="pb-2">
                            <h6 class="text-dark">Biller&apos;s Information</h6>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" name="fname" placeholder="First Name" class="form-input">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="lname" placeholder="Last Name" class="form-input">
                                </div>
                            </div>
                        </div>
                        <!-- SECOND ROW -->
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" placeholder="Email Address" class="form-input">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="number">Phone Number</label>
                                    <input type="tel" name="number" placeholder="Phone Number" class="form-input">
                                </div>
                            </div>
                        </div>
                            <!-- END OF ROW --> 
                        <!-- THIRD ROW -->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address">Delivery Address</label>
                                    <input type="text" name="address" placeholder="Delivery Address" class="form-input">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- BILLING INFORMATION -->
                    <div class="billing-container">
                        <div class="">
                            <h6 class="text-dark">Billing Information</h6>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <label for="card-number">Card Number</label>
                                    <input type="number" name="card-num" placeholder="5399 9344 3245 2248" class="form-input">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="card-expiry">Expiry Date</label>
                                    <input type="number" name="expiry-num" placeholder="01/26" class="form-input">
                                </div>
                            </div>
                        </div>
                            <!-- END OF ROW -->
                            <!-- SECOND ROW --> 
                        <div class="row">
                            <div class="col-12 col-md-9">
                                <div class="form-group">
                                    <label for="card-name">Card Holder</label>
                                    <input type="name" name="card-name" placeholder="Abdullahi Kabri" class="form-input">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="cvv">CVV</label>
                                    <input type="number" name="cvv" placeholder="126" class="form-input" maxlength="3">
                                </div>
                            </div>
                        </div>
                            <!-- END OF ROW -->
                        <div class="w-50 m-auto mt-5">
                            <button class="rounded cart-btn btn-dark btn w-100">Finish</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END OF CONTAINER -->
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-10 me-auto mb-4">
                    <h4 class="text-white mb-3"><a href="index.php">GoDeliver</a></h4>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2024 <strong>GoDeliver</strong><br>
                        Along Dutsina Ma Road, Katsina, Nigeria.</p>

                </div>

                <div class="col-lg-5 col-8">
                    <h5 class="text-white mb-3">Sitemap</h5>

                    <ul class="footer-menu d-block">
                        <li class="footer-menu-item"><a href="about.php" class="footer-menu-link">About</a></li>

                        <li class="footer-menu-item"><a href="products.php" class="footer-menu-link">Products</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                        <li class="footer-menu-item"><a href="category.php" class="footer-menu-link">Category</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-4">
                    <h5 class="text-white mb-3">Social</h5>

                    <ul class="social-icon">

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-skype"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    

    <!-- JAVASCRIPT FILES -->
    <script src="js/all.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>