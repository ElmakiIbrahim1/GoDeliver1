<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tools - Category Page</title>

    <link rel="icon" href="../images/favicon/icon.png">
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/slick.css"/>
    <link rel="stylesheet" href="../css/all.css"/>

    <link href="../css/tooplate-little-fashion.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
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
                <a href="cart.php" class="bi-cart custom-icon"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="../index.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="../products.php">Products</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="../category.php">Category</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../about.php">About</a>
                    </li>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="../cart.php" class="bi-cart custom-icon cart-icon"><b class="cart-items"><?php $cart_items = 2; echo $cart_items;?></b></a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="section-padding mt-5 position-relative">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <div class="sidebar">
                            <ul class="unordered-list">
                                <li class="sidebar-icons"><a href="accessories.php"><i class="fa fa-chain"></i><span>Accessories</span></a></li>
                                <li class="sidebar-icons"><a href="cosmetics.php"><i class="fa fa-palette"></i><span>Beauty & Cosmetics</span></a></li>
                                <li class="sidebar-icons"><a href="appliances.php"><i class="fa fa-home"></i><span>Appliances</span></a></li>
                                <li class="sidebar-icons"><a href="gadgets.php"><i class="fa fa-tv"></i><span>Computer & Gadgets</span></a></li>
                                <li class="sidebar-icons"><a href="fashion.php"><i class="fa fa-shirt"></i><span>Fashion</span></a></li>
                                <li class="sidebar-icons"><a href="furnitures.php"><i class="fa fa-couch"></i><span>Furnitures</span></a></li>
                                <li class="sidebar-icons"><a href="phones.php"><i class="fa fa-mobile"></i><span>Phones</span></a></li>
                                <li class="sidebar-icons"><a href="sports.php"><i class="fa fa-futbol"></i><span>Sports</span></a></li>
                                <li class="sidebar-icons bg-dark rounded"><a href="tools.php" class="text-white"><i class="fa fa-tools"></i><span>Tools</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Main Content -->
                    <div class="col-10">
                        <div class="main-content">
                            <div class="container">
                                <h2 class="d-block text-primary">Tools</h2><i class=""></i>
                                <p class="mt-3 w-75">Browse through our products, choose, add to cart and checkout products of your choice. Some of the categories includes Fashion, Gadgets, Accessories, Utensils, and so much more.</p>
                                <!--  -->
                                <section class="categories-section">
                                    <div class="row">
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-1.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="product-name">Electric Kettle</b>
                                                    <?php $price = "15,500";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF SINGLE CARD -->
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-2.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="">Green Plants</b>
                                                    <?php $price = "7,450";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF SINGLE CARD -->
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-3.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="">Baseball Cap </b>
                                                    <?php $price = "11,500";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF SINGLE CARD -->
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-4.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="">White Shirt</b>
                                                    <?php $price = "20,550";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF SINGLE CARD -->
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-5.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="">Nike ZX44</b>
                                                    <?php $price = "42,260";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF SINGLE CARD -->
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-6.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="">Black Shirt</b>
                                                    <?php $price = "25,400";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF SINGLE CARD -->
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-7.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="">Flex Jeans</b>
                                                    <?php $price = "35,340";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF SINGLE CARD -->
                                        <!-- SINGLE CARD -->
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-2">
                                            <div class="product-card">
                                                <div class="d-flex justify-content-center p-4 img-container">
                                                    <img src="../categories/images/tools/tools-8.png" class="product-img">
                                                </div>
                                                <div class="details-container d-flex justify-content-between p-3 pt-3 align-items-center">
                                                    <b class="">White Lotus</b>
                                                    <?php $price = "8,560";?>
                                                    <b class="product-price text-primary"><?php echo "&#8358;" . $price?></b>
                                                </div>
                                                <div class="p-3 py-0">
                                                    <p class="w-100 product-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est fugit quis molestiae sit aliquam animi! Eveniet adipisci laboriosam aut suscipit.</p>
                                                </div>
                                                <div class="p-3 pb-3">
                                                    <a href="" class="w-100 product-btn btn btn-dark">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF ROW -->
                                    </div>
                                </section>

                            </div>
                            <!-- Products  -->
                        </div>
                        <!-- end of container -->
                    </div>
                    <!-- end of main content -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container-fluid -->
        </div>
        <!-- end of main container -->
    </main>

    <script src="../js/all.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/Headroom.js"></script>
    <script src="../js/jQuery.headroom.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/custom.js"></script>
</html>