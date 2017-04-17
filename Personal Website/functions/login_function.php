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
            echo $_SESSION['user']." You r successfully logged in use this link to go to homepage <a href='../index.php?logout_1=true'>main page</a>";
        }
      }
      else{
        echo "unsuccessfull  please enter a valid login and password <br /> please login again with appropriate email and password <a href='../login/register.php'>login</a>";
      }
    }
    else{
      echo "unsuccessfull  please enter a valid login and password <br /> please login again with appropriate email and password <a href='../login/register.php'>login</a>";
    }
  }
?>
