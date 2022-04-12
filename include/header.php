<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .bg-info{background-color: #75B239;}
</style>
</head>

<body>
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone"><strong class="text-primary">Drag</strong>House</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a class="nav-link" href="all-item.php">Shop</a></li>
                <li><a href="contact.php">Contact us</a></li>
                                <!-- <a href="login.php"><button class="btn btn-sm btn-outline-success">Login</button></a> -->
                <?php
                if (isset($_SESSION['id'])) {
                  $count = 0;
                if (isset($_SESSION['cart'])) {
                  $count = count($_SESSION['cart']);
                }
                  // echo '<button type="button" class="btn btn-sm btn-outline-success">'.$_SESSION['name'].'</button>';
                  echo '<a href="my_cart.php"><button class="btn btn-outline-success my-2 my-sm-0">Cart item ( '. $count .' )</button></a>';
                  echo '<a href="logout.php"><button class="btn  btn-outline-success">Logout</button></a>';
                } else {
                  echo '<button type="button" class="btn  btn-outline-success" data-toggle="modal" data-target="#myModal">login</button>';
                  echo '<a href="registration.php"><button class="btn  btn-outline-success">Register</button></a>';
                }
                ?>
              </ul>      
            </nav>
          </div>
<!--           <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div> -->
        </div>
      </div>