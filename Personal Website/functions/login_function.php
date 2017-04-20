<?php
  $con = mysqli_connect("localhost","root","","shopping_store");
  if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  function login(){
    global $con;
    if(!empty($_POST)){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $check = "select * from users where email='".$email."'";
      $pass_db = mysqli_query($con,$check);
      $row = mysqli_fetch_array($pass_db);
      if($row){
        if($pass == $row['password']){
            session_start();
            if(isset($_SESSION['id'])){
              $_SESSION['id'] = $row['id'];
            }else{
              $_SESSION['id'] = $row['id'];
            }
            if(isset($_SESSION['user'])){
              $_SESSION['user'] = $row['username'];
            }else{
              $_SESSION['user'] = $row['username'];
            }
            if(isset($_SESSION['email'])){
              $_SESSION['email'] = $row['email'];
            }else{
              $_SESSION['email'] = $row['email'];
            }
            if(isset($_SESSION['pincode'])){
              $_SESSION['pincode'] = $row['pincode'];
            }else{
              $_SESSION['pincode'] = $row['pincode'];
            }
            if(isset($_SESSION['phone'])){
              $_SESSION['phone'] = $row['phone'];
            }else{
              $_SESSION['phone'] = $row['phone'];
            }
            echo '<!DOCTYPE html>
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
                <link rel="stylesheet" href="../styles/Style.css">
            </head>

            <body>
              <div class="container-fluid" style="margin:0;">
                <center>
                    <div class="landing-page-content">
                      <div class="row row-centered landing-page container-fluid" >
                        <div class="landing-page-header">
                          <img class="logo">
                        </div>
                      <img src="../images/glassy-smiley-success.png" alt="" class="un-img-size"><br>
                      <h1>'.$_SESSION['user'].' Successfully logged in</h1>
                      <p style="color:red; margin-top:20px;">
                        *please click the below link to go on our home page
                      </p><br>
                      <button type="button" name="button" class="btn-success btn-lg large"><a href="../index.php?logout_1=false" class="white">main page</a>   <i class="fa fa-angle-right right"></i></button>
                    </div>
                  </div>
                </div>
              </center>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
              <script src="../script/script.js"></script>
            </body>';
        }
      }
      else{
        echo '<!DOCTYPE html>
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
            <link rel="stylesheet" href="../styles/Style.css">
        </head>

        <body>
          <div class="container-fluid" style="margin:0;">
            <center>
                <div class="landing-page-content-un">
                  <div class="row row-centered landing-page-un container-fluid" >
                    <div class="landing-page-header">
                      <img class="logo">
                    </div>
                  <img src="../images/glassy-smiley-failure.png" class="un-img-size"><br>
                  <h1>Unsuccessfull</h1>
                  <p style="color:red; margin-top:20px;">
                    *incorrect email id or password<br />
                    please enter a valid login id and password :)
                  </p><br><br>
                  <button type="button" name="button" class="btn-danger btn-lg large"><i class="fa fa-angle-left left"></i><a href="../login/register.php" class="white">   Login/Register</a></button>
                </div>
              </div>
            </div>
          </center>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
          <script src="../script/script.js"></script>
        </body>
';
      }
    }
    else{
      echo '<!DOCTYPE html>
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
          <link rel="stylesheet" href="../styles/Style.css">
      </head>

      <body>
        <div class="container-fluid" style="margin:0;">
          <center>
              <div class="landing-page-content-un">
                <div class="row row-centered landing-page-un container-fluid" >
                  <div class="landing-page-header">
                    <img class="logo">
                  </div>
                <img src="../images/glassy-smiley-failure.png" class="un-img-size"><br>
                <h1>Unsuccessfull</h1>
                <p style="color:red; margin-top:20px;">
                  *incorrect email id or password<br />
                  please enter a valid login id and password :)
                </p><br><br>
                <button type="button" name="button" class="btn-danger btn-lg large"><i class="fa fa-angle-left left"></i><a href=".login/register.php" class="white">   Login/Register</a></button>
              </div>
            </div>
          </div>
        </center>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="../script/script.js"></script>
      </body>
    ';
    }
  }
?>
