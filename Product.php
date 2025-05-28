<?php
include 'includes/connection.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);


    //  $image = $row['image'];
    //  $title = $row['title'];
    //  $description = $row['description'];
    //  $price = $row['price'];
    //     echo "<div>";
        // echo "<img src='" . $row['image'] . "' alt='Product Image'>";
        // echo "<h3>" . $row['title'] . "</h3>";
        // echo "<p>" . $row['description'] . "</p>";
        // echo "<p>Price: $" . $row['price'] . "</p>";
        // echo "</div>";

?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>GoDeliver - Products</title>

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

    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.php">
                <strong><span>GoDeliver</span></strong>
            </a>

            <div class="d-lg-none">
                <a href="cart.php" class="bi-cart custom-icon"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">Products</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Category</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link " href="register.php">Account</a>
                        </li>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="cart.php" class="bi-cart custom-icon cart-icon"><b class="cart-items"><?php $cart_items = 2; echo $cart_items;?></b></a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="mt-5 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1>
                            <h2 class="d-block text-primary">Our Products</h2>
                            <p class="mt-3 w-75">GoDeliver offers you cheap products. Some of our products categories include Fashion, Gadgets, Accessories, Utensils, and so much more.</p>
                        </h1>
                        <a href="category.php" class="btn custom-btn">See Categories</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="products section-padding py-3">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">
                        <h4 class="mb-3 text-primary">New Arrivals</h4>
                    </div>
    <?php 
    if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
    $image = $row['image'];
    $title = $row['title'];
    $description = $row['description'];
    $price = $row['price'];


    ?>
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="cart.php">
                                <?php  
                                echo "<img class='img-fluid product-image' src='" . $row['image'] . "' '>";
                                ?>
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert me-auto text-primary rounded">New</span>

                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>

                            <div class="product-info">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="product-title mb-0"><a href="cart.php" class="product-title-link"><?php  echo $title ?></a></h5>
                                    <b class="product-price text-primary ms-auto">&#8358;<?php  echo $price ?></b>
                                </div>
                                
                                <div class="d-block">
                                    <p class="product-p"><?php  echo $description ?></p>
                                    <a href="" class="w-100 cart-btn btn btn-dark rounded">Add to Cart</a>
                                </div>
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
                    <!-- <div class="my-4"></div>
                    <div class="col-12">
                        <h4 class="mb-3 text-primary">Popular</h4>
                    </div> -->


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

                        <li><a href="instagram" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="facebook" class="social-icon-link bi-skype"></a></li>
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
