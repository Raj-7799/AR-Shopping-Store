<?php
  $con = mysqli_connect("localhost","root","","shopping_store");
  if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
  function insert(){
    global $con;
    if(!empty($_POST)){
      $email = $_POST['email'];
      $username = $_POST['username'];
      $pass = $_POST['pass'];
      $pincode = $_POST['pincode'];
      $slist = $_POST['slist'];
      $gender = $_POST['gender'];
      $contact = $_POST['contact'];
      $insert_query = "INSERT INTO `users` (`id`, `email`,`username`,`password`, `pincode`, `state`, `gender`, `phone`) VALUES (NULL, '$email', '$username', '$pass', '$pincode', '$slist', '$gender','$contact')";
      $bol = mysqli_query($con,$insert_query);
      if($bol){
        echo "<br />successfull please login to continue<br />";
        echo "<script>alert('Regietration Successful');window.location.href='../login/register.php';</script>";
      }
      else{
        echo "<br />unsuccessfull";
      }
    }
    else{
      echo 'Please register <a href="../login/register.php">Register</a>';
  }
  }
 ?>
