<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentaru</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/fav.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets1/css/about.css">
    <link rel="stylesheet" href="aboutassets/css/Features-Boxed.css">
    <link rel="stylesheet" href="aboutassets/css/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation -->
    <nav class="navbar navbar-custom navbar" role="navigation" style="color: White; background-color:#000F64;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   <strong>Rentaru </strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
              <li><a href=""> <strong>Welcome <?php echo $_SESSION['login_customer']; ?></strong></a></li>
              <li><a href="index.php"> <strong>Home</strong></a></li>
              <li><a href="prereturnpro.php"><strong>Return</strong></a></li>
              <li><a href="mybookings.php"> <strong>Bookings</strong></a></li>
              <li><a href="enterproduct.php"><strong>Add Product</strong></a></li><li><a href="myproduct.php"><strong>My Product</strong></a></li>
              <li><a href="customerview.php"><strong>View History</strong></a></li>
                    <li><a href="logout.php"><strong>Logout</strong></a></li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><strong>Home</strong></a>
                    </li>
                    <li>
                        <a href="customerlogin.php"><strong>Login</strong></a>
                    </li>
                    <li>
                        <a href="about.php"> <strong>About </strong></a>
                    </li>
                    <li>
                        <a href="contact.php"> <strong>Contact</strong> </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 <h1 style="text-align:center"><strong>About Us</strong></h1>
 <h2  style="text-align:center">Enjoy An Upgraded Lifestyle On A Budget With Rentaru!</h2>
<div class="features-boxed">
        <div class="container">
            
            <div class="row justify-content-center features">
                <div class="col-sm-12 col-md-6 col-lg-6 item">
                    <div class="box">
                        <h3 class="name">Rent Faster</h3>
                        <p class="description"><ul style="text-align: justify;">Rentaru is a leading rental company with a vision of pan-India services. We offer furniture, appliances, and electronics on rent in Udupi, Manglore, Banglore, Mysore at an affordable monthly fee. When you choose to rent from us instead of buying from a store, you get to use the best products in the market and still save money!</ul>
    <br><ul style="text-align: justify;">Rentaru makes it effortless for you to rent from us. All you need to do is pick out the products you like, add them to your cart, and then check out. Our team will deliver your rental items directly to your home and also install them for you. We offer fast delivery to all parts of Bangalore, including locations such as Udupi, Manglore, Banglore, Mysore.</ul></p><br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 item">
                    <div class="box">
                        <h3 class="name">Renting From Us Is Smarter Than Buying From A Retailer</h3>
                        <p class="description"><p style="text-align: center;">Rentaru offers you multiple advantages that no retailer can offer.</p>
    <ul style="text-align: justify;"><li><strong>Product swap</strong>: Every 12 months, you can trade your rental items for a newer design.</li></ul>
    <ul style="text-align: justify;"><li><strong>Free maintenance</strong>: Our team will periodically maintain and clean your rental products for free.</li></ul>
    <ul style="text-align: justify;"><li><strong>Damage waiver</strong>: We don’t charge for any minor damage.</li></ul>
    <ul style="text-align: justify;"><li><strong>Free relocation</strong>: Rentaru will pack and move your rented items to any new PIN code we are present in, for free!</li></ul>
    <ul style="text-align: justify;"><li><strong>Hassle-free returns</strong>: You can return any item you don’t like at the time of delivery, without a deposit deduction.</li></ul></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets1/js/jquery.min.js"></script>
    <script src="assets1/bootstrap/js/bootstrap.min.js"></script>

    <!--******************************************************************************************************************************************
                                                    Write Your Code Here-->

    <div  style="position:relative;">
        <div class="site-footer" style="color:#ddd;background-color:#282E34;text-align:center;padding:20px 20px;text-align: justify;">
        <footer >
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>© 2020 Rentaru</h5>
                </div>
                <div class="col-sm-6 social-icons">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>