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

function display_new_arrival(){
  global $con;
  $i=0;
  $display = "select * from products order by id desc";
  $query = mysqli_query($con,$display);
  while($row = mysqli_fetch_array($query)){
    if($i!=8){
      $id = $row['id'];
      $title = $row['title'];
      $price = $row['price'];
      $cateogary_name = $row['cateogary'];
      $desc = $row['description'];
      $keyword = $row['keyword'];
      $image = $row['image'];
      echo'<div class="col-xs-6  col-md-4  col-centered products">
            <div class="product_title">
              <span class="product_title_display">'.$title.'</span>
            </div>
          <img src="images/Products/'.$image.'" class="product_display">
          <div class="price-tag">
              <span class="price">price : <b>'.$price.' ₹</b></span>
              <div class="rate_button">
                  <button type="button" class="btn btn-primary"><a href="index.php?id='.$id.'">Add to Cart</a></button>
              </div>
          </div>
      </div>';
      $i++;
    }
  }
}
function get_list(){
  if(!empty($_SESSION)){
    echo'<li><a href=""><span></span>Welcome '.$_SESSION['user'].'</a></li>';
  }
  else{
    echo '<li><a href="login/register.php"><span></span>Login</a></li>';
  }
}
function logout(){
  if(!empty($_SESSION)){
    echo'<li><a href="index.php?logout_1=true"?>Logout</a></li>';
  }
}
function log_out(){
  session_destroy();
  unset($_GET);
}

function display_products(){
  global $con;
  $i=0;
  $display = "select * from products";
  $query = mysqli_query($con,$display);
  while($row = mysqli_fetch_array($query)){
      $id = $row['id'];
      $title = $row['title'];
      $price = $row['price'];
      $cateogary_name = $row['cateogary'];
      $desc = $row['description'];
      $keyword = $row['keyword'];
      $image = $row['image'];
      echo'<div class="col-xs-6  col-md-4  col-centered products">
            <div class="product_title">
              <span class="product_title_display">'.$title.'</span>
            </div>
          <img src="images/Products/'.$image.'" class="product_display">
          <div class="price-tag">
              <span class="price">price : <b>'.$price.' ₹</b></span>
              <div class="rate_button">
                  <button type="button" class="btn btn-primary"><a class="white" href="index.php?id='.$id.'">Add to Cart</a></button>
              </div>
          </div>
      </div>';
  }
}
 ?>
