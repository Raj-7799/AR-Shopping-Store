<?php
  $con = mysqli_connect("localhost","root","","shopping_store");
  if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  // $query_search_key = "select keyword from products;";
  // $result_query_key = mysqli_query($con,$query_search_key);

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
              <span class="product_title_display"">'.$title.'</span>
            </div>
          <img src="images/Products/'.$image.'" class="product_display">
          <div class="price-tag">
              <span class="price">price : <b>'.$price.' ₹</b></span>
              <div class="rate_button">
                  <button type="button" class="btn btn-primary"><a class="white" href="products.php?id='.$id.'">Add to Cart</a></button>
              </div>
          </div>
      </div>';
      $i++;
    }
  }
}
function get_list(){
  global $con;
  if(!empty($_SESSION)){
    echo'<li><a href="orders.php" class="white"><span class="glyphicon glyphicon-heart"></span>  Welcome '.$_SESSION['user'].'</a></li>';
    $user_id = $_SESSION['id'];
    $query = "select SUM(quantity) as COUNT from cart where user_id=".$user_id;
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if(!empty($row['COUNT'])){  echo '<li><a href="cart_display.php"><span class="glyphicon glyphicon-shopping-cart"></span>   Cart ( '.$row['COUNT'].' )</a></li>';
    }else{
    echo '<li><a href="cart_display.php"><span class="glyphicon glyphicon-shopping-cart"></span>   Cart (0)</a></li>';}
  }
  else{
    echo '<li><a href="login/register.php"><span></span><i class="fa fa-sign-in" aria-hidden="true"></i>
  Login</a></li>';
  }
}
function logout(){
  if(!empty($_SESSION)){
    echo'<li><a href="logout.php?logout=1"?><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a></li>';
  }
}

function display_products($display){
  global $con;
  $i=0;
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
              <span class="product_title_display"">'.$title.'</span>
            </div>
          <img src="images/Products/'.$image.'" class="product_display" role="button" data-toggle="modal" data-target="#myModal'.$id.'">
          <div class="price-tag">
              <span class="price">price : <b>'.$price.' ₹</b></span>
              <div class="rate_button">
                  <button type="button" class="btn btn-primary"><a class="white" href="products.php?id='.$id.'">Add to Cart</a></button>
              </div>
          </div>
          <div class="modal fade" id="myModal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header black ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel"><span class="modal-title"">'.$title.'</span></h2>
              </div>
              <div class="modal-body">
                  <center>
                  <img src="images/Products/'.$image.'" class="product_display_modal">
                  </center>
                  <p class = row row-centered para>'.$desc.'</p><br /><br />
              </div>
              <div class="modal-footer">
                <span class="price-modal">price : <b>'.$price.' ₹</b></span>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><a class="white" href="products.php?id='.$id.'">Add to Cart</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>';
  }
}
  function get_order_items(){
    global $con;
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM `orders` WHERE `user_id` = ".$user_id."";
    $result = mysqli_query($con,$query);
    $query1 = "SELECT * FROM `total` WHERE `user_id` =".$user_id."";
    $result1 = mysqli_query($con,$query1);
    $get_result = mysqli_fetch_array($result1);
    $price_total = $get_result['total'];
    while($row = mysqli_fetch_array($result)){
      $product_id = $row['product_id'];
      $query_product = "SELECT * FROM products where id=".$product_id;
      $result_product = mysqli_query($con,$query_product);
      $row_product = mysqli_fetch_array($result_product);
      $product_title = $row_product['title'];
      $price = $row_product['price'];
      $image = $row_product['image'];
      echo '<tr>
        <th scope="row">
          <img src = "images/product_images/'.$image.'" height="200px"/>
        </th>
        <td ><h3 style="padding:0;margin:0;text-align:center"><strong>'.$product_title.'</strong></h3></td>
        <td colspan="2">'.$price.'</td>
        </tr>';
    }
    echo '<tr>
      <td colspan="2"></td>
      <td><h3><strong>Total</strong></h3></td>
      <td><h3>'.$price_total.'</h3></td>
      <td><button type="button" class="btn-lg btn-primary" size="40" style="margin-top:10px;"><a href="index.php" class="white">Home  <i class="fa fa-angle-right right"></i></a></button></td>
    </tr>';
  }
 ?>
