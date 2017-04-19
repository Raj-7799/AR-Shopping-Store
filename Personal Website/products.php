<?php
  include('functions/functions.php');
  session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Shopping Store</title>
    <link rel="shortcut icon" href="images\Website_Logo_black.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <link rel="stylesheet" href="styles\Style.css">
</head>

<body>
    <header class="header-position">
        <img class="logo">
        <nav class="head_nav">
            <ul>
                <li class=""><span></span><a href="#" class="home_t">Home</a></li>
                <?php get_list(); ?>
                <li class =""><span></span><a href="#" class="about_t">About</a></li>
                <li class=""><span></span><a href="#" class="products_t">Products</a></li>
                <li class=""><span></span><a href="#" class="contact_t">Contact</a></li>
                <li class=""><span></span><a href="#" class="store_t">Store</a></li>
                <?php logout(); ?>
            </ul>
        </nav>
        <a class="head_nav_2" href="#">+email</a>
        <div class="mobile-nav">
            <button type="button" id="menu">
          <span class="glyphicon glyphicon-align-justify"></span>
      </button>
        </div>
    </header>
    <div class="mobile-nav-isopen">
        <ul>
            <li class="active home_t"><a href="#">Home</a></li>
            <li><a href="login/register.php">Login</a></li>
            <li class="about_t"><a href="#">About</a></li>
            <li class="products_t"><a href="#">Products</a></li>
            <li class="contact_t"><a href="#">Contact</a></li>
            <li class="store_t"><a href="#">Store</a></li>
        </ul>
    </div>
      <div class="product_cat container-fluid">
        <h1 class="title">Our Products</h1>
        <hr width=50%>
        <div class="btn-group cateogary">
             <button type="button" data-toggle="dropdown" class="btn-lg dropdown-toggle">Category <span class="caret"></span></button>
             <ul class="dropdown-menu">
                 <li><a href="#">hello</a></li>
             </ul>
         </div>
         <div class="btn-group sort">
              <button type="button" data-toggle="dropdown" class="btn-lg dropdown-toggle">Sort By <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#">hello</a></li>
              </ul>
          </div>
         <br><br><br><br><br><br>
         <div class="row row-centered">
           <?php display_products(); ?>
         </div>
    </div>
    <footer class="foot container-fluid">
        <div class="text-center center-block">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Partners</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Designer Studio</a></li>
                            <li><a href="#">Sponsors</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Marketing Team</a></li>
                            <li><a href="#">Presentations</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Product Help</a></li>
                            <li><a href="#">Our Designers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="/">© 2017 AR Design Studios Pvt Ltd</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <br />
            <a href="#"><i class="fa fa-facebook-square fa-3x social" id="social-fb"></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-3x social" id=social-tw></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-3x social" id="social-gp"></i></a>
            <a href="#"><i class="fa fa-envelope-square fa-3x social" id="social-em"></i></a>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="script\script.js"></script>
</body>

</html>
