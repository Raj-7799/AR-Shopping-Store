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
        <td><h3 style="padding:0;margin:0;text-align:center"><strong>'.$product_title.'</strong></h3></td>
        <td>'.$price.'</td>
        <td>
            <div class="input-group spinner">&nbsp;
            <input type="text" class="form-control" value="'.$quantity.'">
            <div class="input-group-btn-vertical">&nbsp;
              <button class="btn btn-default" type="button"><a  class="white" href="cart_display.php?product_id='.$product_id.'&state=up"><i class="fa fa-caret-up"></i></a></button>
              <button class="btn btn-default" type="button"><a  class="white" href="cart_display.php?product_id='.$product_id.'&state=down"><i class="fa fa-caret-down"></i></a></button>
            </div>
          </div>
        </td>
        <td style="text-align:center">'.$total.'</td>
        <td><button type="button" class="btn-lg btn-primary" size="40"><a class="white" href="cart_display?remove='.$product_id.'">Remove</a><i class="fa fa-window-close"></i></button></td>
      </tr>';
    }
    echo '<tr>
      <td colspan="2"></td>
      <td><h3><strong>Total</strong></h3></td>
      <td><h3>'.$total_cart.'</h3></td>
      <td><button type="button" class="btn-lg btn-primary" size="40" style="margin-top:10px;"><a href="proceed_order.php?quantity='.$total_cart.'" class="white">Proceed  <i class="fa fa-angle-right right"></i></a></button></td>
    </tr>';
  }

  function cart_to_orders(){
    global $con;
    $username = $_SESSION['user'];
    $user_id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $pin = $_SESSION['pincode'];
    $total = $_GET['quantity'];
    $query = "SELECT * from cart where user_id =".$user_id.";";
    $result_order = mysqli_query($con,$query);
    $query2 = "SELECT * from total where user_id=".$user_id;
    $result_order_2 = mysqli_query($con,$query2);
    if($result_order_2){
      $query5 = "UPDATE `total` SET `total` = total+".$total." WHERE `total`.`user_id` = 7;";
      $result_order_3 = mysqli_query($con,$query5);
    }
      $query1 = "INSERT INTO `total` (`user_id`, `total`) VALUES ('".$user_id."', '".$total."')";
      $result_order_1 = mysqli_query($con,$query1);
    while($row = mysqli_fetch_array($result_order)){
      $product_id = $row['product_id'];
      $query_product = "INSERT INTO `orders` (`user_id`, `product_id`, `username`, `email`, `pincode`) VALUES ('$user_id', '$product_id', '$username', '$email', '$pin');";
      $result_product = mysqli_query($con,$query_product);
      $delete_product = "DELETE from cart where user_id=".$user_id;
      $result_delete = mysqli_query($con,$delete_product);
      if(isset($result_delete)){
        echo '<script>alert("Order successfull")</script>';
      }
    }

  }
?>
