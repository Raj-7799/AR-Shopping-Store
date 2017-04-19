<?php
// add product and update existing product
  if(isset($_GET['id'])){
    if(isset($_SESSION['id'])){
      global $con;
      $product_id = $_GET['id'];
      $user_id = $_SESSION['id'];
      $find_query = "SELECT * FROM `cart` WHERE user_id=".$user_id." AND product_id=".$product_id;
      $find_result = mysqli_query($con,$find_query);
      if($find_query){
        $row_find = mysqli_fetch_array($find_result);
        $quantity = $row_find['quantity'];
        $quantity = $quantity+1;
        $update_query = "UPDATE cart set quantity = ".$quantity." where user_id=".$user_id." and product_id=".$product_id.";";
        mysqli_query($con,$update_query);
      }
      $quantity = 1;
      $qinsert = "INSERT INTO `cart` (`user_id`, `product_id`, `quantity`) VALUES ('".$user_id."', '".$product_id."', '".$quantity."')";
      mysqli_query($con,$qinsert);
    }
    else{
      echo"<script>alert('Please login before adding to cart')</script>";
      echo"<script>window.location.href = './login/register.php'</script>";
    }
  }

// remove a item from cart_display
  if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    $remove_user = $_SESSION['id'];
    $remove_query = "DELETE from cart where user_id=".$remove_user." and product_id=".$remove_id;
    mysqli_query($con,$remove_query);
  }

  // function to display items in cart_display.php
  function get_cart_items(){
    global $con;
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM `cart` WHERE `user_id` = ".$user_id."";
    $result = mysqli_query($con,$query);
    $total_cart = 0;
    while($row = mysqli_fetch_array($result)){
      $product_id = $row['product_id'];
      $query_product = "SELECT * FROM products where id=".$product_id;
      $result_product = mysqli_query($con,$query_product);
      $row_product = mysqli_fetch_array($result_product);
      $product_title = $row_product['title'];
      $price = $row_product['price'];
      $quantity = $row['quantity'];
      $total = $price * $quantity;
      $total_cart = $total_cart + $total;
      $image = $row_product['image'];
      echo '<tr>
        <th scope="row">
          <img src = "images/product_images/'.$image.'" height="200px"/>
        </th>
        <td><h3 style="padding:0;margin:0"><strong>'.$product_title.'</strong></h3></td>
        <td>'.$price.'</td>
        <td>'.$quantity.'</td>
        <td>'.$total.'</td>
        <td><button type="button" class="btn-lg btn-primary" size="40"><a class="white" href="cart_display?remove='.$product_id.'">Remove</a><i class="fa fa-window-close"></i></button></td>
      </tr>';
    }
    echo '<tr>
      <td colspan="2"></td>
      <td><h3><strong>Total</strong></h3></td>
      <td><h3>'.$total_cart.'</h3></td>
      <td><button type="button" class="btn-lg btn-primary" size="40" style="margin-top:10px;">Proceed  <i class="fa fa-angle-right right"></i></button></td>
    </tr>';
  }
?>
