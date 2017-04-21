<?php
  session_start();
  include('functions/functions.php');
  include_once('functions/cart.php');
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles\Style.css">
</head>

<body>
    <header class="header-position">
        <img class="logo">
        <nav class="head_nav">
            <ul>
                <li class=""><span></span><a href="index.php" class="home_t"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
                <?php get_list(); ?>
                <li class =""><span></span><a href="aboutus.php" class="about_t"><i class="fa fa-question-circle-o" aria-hidden="true"></i>  About</a></li>
                <li class=""><span></span><a href="products.php" class="products_t"><i class="fa fa-product-hunt" aria-hidden="true"></i>   Products</a></li>
                <li class=""><span></span><a href="http://adityashinde989.000webhostapp.com" class="contact_t"><i class="fa fa-address-card-o" aria-hidden="true"></i>   Contact</a></li>
                <li class=""><span></span><a href="stores.php" class="store_t"><i class="fa fa-street-view" aria-hidden="true"></i>   Store</a></li>
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
          <li class="active home_t"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
          <?php get_list(); ?>
          <li class="about_t"><a href="aboutus.php"><i class="fa fa-question-circle-o" aria-hidden="true"></i>  About</a></li>
          <li class="products_t"><a href="products.php"><i class="fa fa-product-hunt" aria-hidden="true"></i>   Products</a></li>
          <li class="contact_t"><a href="http://adityashinde989.000webhostapp.com/Personal-Website/index.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>  Contact</a></li>
          <li class="store_t"><a href="stores.php"><i class="fa fa-street-view" aria-hidden="true"></i>  Store</a></li>
          <?php logout(); ?>
        </ul>
    </div>
    <div class="container-fluid home">
        <div class="back">
            <div class="text"></div>
            <div class="bird"></div>
        </div>
        <div class="Title">
            <h1 class="title">Our Clothing Store</h1>
            <hr width="50%">
            <p class="row row-centered para">AR is the fun, friendly spot for style and decor that’s as expressive and unique as you are!<br> Inspired by feedback from our dedicated community, our exclusive line of apparel is available in a full range of sizes <br>― because we believe
                fashion is for every body. We also carry a curated selection of styles from hundreds of independent designers.
                <br> Eight Hour Day showcases the people behind the company and humanizes its brand.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <h1 class="title">New Arrivals</h1>
            <hr width="50%">
        </div>
        <div class="row row-centered product">
          <?php display_new_arrival(); ?>
        </div>
        <hr width="50%"><br>
        <p class="row row-centered para">AR is the fun, friendly spot for style and decor that’s as expressive and unique as you are!<br> Inspired by feedback from our dedicated community, our exclusive line of apparel is available in a full range of sizes <br>― because we believe fashion
            is for every body. We also carry a curated selection of styles from hundreds of independent designers.
            <br> Eight Hour Day showcases the people behind the company and humanizes its brand.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p><br><br><br>
        <div class="large-window center-block">
            <div class="tint">
            </div>
            <br><br><br><br>
        </div>
        <hr width="50%"><br>
        <div class="row row-centered para">
            <p class="col-md-4 col-sm-6 col-centered para2 details">AR is the fun, friendly spot for style and decor that’s as expressive and unique as you are!<br> Inspired by feedback from our dedicated community, our exclusive line of apparel is available in a full range of sizes <br>― because we believe
                fashion is for every body. We also carry a curated selection of styles from hundreds of independent designers.
                <br> Eight Hour Day showcases the people behind the company and humanizes its brand.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
            </p>
            <p class="col-md-4 col-sm-6 col-centered details para2">The silhouette of a suit is its outline. Tailored balance created from a canvas fitting allows a balanced silhouette so a jacket need not be buttoned and a garment is not too tight or too loose. <br>A proper garment is shaped from the neck
                to the chest and shoulders to drape without wrinkles from tension.<br> Shape is the essential part of tailoring that often takes hand work from the start. Suits are made in a variety of fabrics, but most commonly from wool.<br>The two
                main yarns produce worsteds (where the fibres are combed before spinning to produce a smooth, hard wearing cloth) and woollens (where they are not, thus remaining comparatively fluffy in texture).
            </p>
            <hr width="50%">
        </div><br><br><br>
        <br><br><br><br>
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
    <script src="https://use.fontawesome.com/80dcb2c1fd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="script\script.js"></script>
</body>

</html>
