<?php

  $con = mysqli_connect("localhost","root","","shopping_store");
  if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  function insert(){
    global $con;
    $title = $_POST['title'];
    $price = $_POST['price'];
    $cateogary_name = $_POST['cateogary_name'];
    $desc = $_POST['desc'];
    $keyword = $_POST['keyword'];
    $image = $_FILES['file']['name'];
    $image_tmp = $_FILES['file']['tmp_name'];
    if(isset($image))
    {
      if(!empty($image))
      {
        move_uploaded_file($image_tmp,"../images/product_images/".$image);
      }
    }
    $insert = "INSERT INTO `products` (`id`, `title`, `price`, `cateogary`, `image`, `description`, `keyword`) VALUES (NULL, '$title', '$price', '$cateogary_name', '$image', '$desc', '$keyword')";
    $insert_query = mysqli_query($con,$insert);
    if($insert_query){
      echo '<script>alert("Product inserted successfull");</script>';
    }
    else{
      echo '<script>alert("not inserted");</script>';
    }
  }
 ?>
