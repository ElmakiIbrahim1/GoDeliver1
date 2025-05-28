<?php
include 'includes/connection.php';

$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>GoDeliver - Cart</title>

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
                    <a href="cart.php" class="bi-cart custom-icon cart-icon text-primary"><b class="cart-items"><?php $cart_items = 2; echo $cart_items;?></b></a>
                </div>
            </div>
        </div>
    </nav>

    <main>

        <section class="section-padding mt-5">
            <div class="container cart-container">
                <!-- CART -->
                <div class="cart">
                <?php 
    if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
    $cart_id = $row['id'];
    $image = $row['image'];
    $title = $row['title'];
    $description = $row['description'];
    $price = $row['price'];


    ?>
                              <?php 
                              //DELETE 
            if (isset($_GET['delete'])) {
                $cart_id = $_GET['delete'];

                $query = "DELETE  FROM categories WHERE id = {$cart_id} ";
                $delete_query = mysqli_query($conn, $query);
                header("Location:  cart.php");
                if (!$delete_query) {
                    die("QUERY FAILD" . mysqli_error($connection));
                } else {
                    echo "DELETED SUCCESSFULLY";
                }
            } ?>
                  <div class="row">
                        <div class="col-6 col-md-3 d-flex justify-content-center">
                        <?php  
                                echo "<img class='cart-img' src='" . $row['image'] . "' '>";
                                ?>
                        </div>

                        <div class="col-12 col-md-9">
                            <div class="name-row d-flex justify-content-between align-items-center">
                                <h6 class="item-name mb-0"><?php  echo $title ?></h6>
                             <?php   echo "<a href='cart.php?delete={$cart_id}'> <i class='fa fa-trash'></i></a>"; ?>
                            </div>
                            <!--  -->
                            <p class="item-description mb-0"><?php  echo $description ?></p>
                            <!--  -->
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <b class="text-primary item-price">&#8358;<?php  echo $price ?></b>
                                <div class="shadow d-flex align-items-center justify-content-end">
                                    <i class="fa fa-minus text-muted cursor-pointer icon-shadow"></i>
                                    <b class="mx-3">01</b>
                                    <i class="fa fa-plus text-primary icon-shadow"></i>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <?php
                }
                } else {
                    echo "No products available.";
                }

                mysqli_close($conn);
                    ?>
                <!-- END OF CART -->
                <!-- CART -->
                
                
                

                <!-- END OF CART INFO -->
            </div>
            <!-- END OF CONTAINER -->
        </section>

        <section class="related-product section-padding border-top">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h3 class="mb-5 text-primary">You might also like</h3>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="cart.html">
                                <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image rounded" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert me-auto text-primary rounded">New</span>

                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="cart.html" class="product-title-link">Tree pot</a>
                                    </h5>

                                    <p class="product-p">Original package design from house</p>
                                </div>

                                <small class="product-price text-muted ms-auto mt-auto mb-5">N25</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="product-thumb">
                            <a href="cart.html">
                                <img src="images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg" class="img-fluid product-image rounded" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="cart.html" class="product-title-link">Juice Drinks</a>
                                    </h5>

                                    <p class="product-p">Nature made another world</p>
                                </div>

                                <small class="product-price text-muted ms-auto mt-auto mb-5">$45</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

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