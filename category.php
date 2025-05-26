<?php
include 'includes/connection.php';

$sql = "SELECT * FROM categories";
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

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>GoDeliver - Category Page</title>

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
                <a href="cart.php" class="bi-cart custom-icon"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="products.php">Products</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="category.php">Category</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="about.php">About</a>
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
        <div class="section-padding mt-5 position-relative">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <div class="sidebar">
                        <ul class="unordered-list">
                                <li class="sidebar-icons"><a href="categories/accessories.php"><i class="fa fa-chain"></i><span>Accessories</span></a></li>
                                <li class="sidebar-icons"><a href="categories/cosmetics.php"><i class="fa fa-palette"></i><span>Beauty & Cosmetics</span></a></li>
                                <li class="sidebar-icons"><a href="categories/appliances.php"><i class="fa fa-book"></i><span>Appliances</span></a></li>
                                <li class="sidebar-icons"><a href="categories/gadgets.php"><i class="fa fa-tv"></i><span>Computer & Gadgets</span></a></li>
                                <li class="sidebar-icons"><a href="categories/fashion.php"><i class="fa fa-shirt"></i><span>Fashion</span></a></li>
                                <li class="sidebar-icons"><a href="categories/furnitures.php"><i class="fa fa-couch"></i><span>Furnitures</span></a></li>
                                <li class="sidebar-icons"><a href="categories/phones.php"><i class="fa fa-mobile"></i><span>Phones</span></a></li>
                                <li class="sidebar-icons"><a href="categories/sports.php"><i class="fa fa-futbol"></i><span>Sports</span></a></li>
                                <li class="sidebar-icons"><a href="categories/tools.php"><i class="fa fa-tools"></i><span>Tools</span></a></li>
                                <li><a><i></i><span></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Main Content -->
                    <div class="col-10">
                        <div class="main-content">
                            <div class="container">
                                <h2 class="d-block text-primary">Categories</h2><i class=""></i>
                                <p class="mt-3 w-75">Browse through our products, choose, add to cart and checkout products of your choice. Some of the categories includes Fashion, Gadgets, Accessories, Utensils, and so much more.</p>
                                <!--  -->
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
                                    <button type="submit" class="w-100 cart-btn btn btn-dark rounded" onclick="addToCart('<?php echo $title; ?>', '<?php echo $image; ?>', '<?php echo $description; ?>', '<?php echo $price; ?>')">Add to Cart</button>
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
    <script>
function addToCart(title, image, description, price) {
    // Send AJAX request to add item to cart
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'cart.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if(xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if(response.status === 'success') {
                alert('Item added to cart');
            } else {
                alert('Failed to add item to cart');
            }
        }
    };
    var params = 'action=add&title=' + encodeURIComponent(title) + '&image=' + encodeURIComponent(image) + '&description=' + encodeURIComponent(description) + '&price=' + encodeURIComponent(price);
    xhr.send(params);
}
</script>
    <script src="js/all.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>