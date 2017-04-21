<?php
    if(isset($_GET['product_id']) && isset($_GET['state'])){
      $product_id_1 = $_GET['product_id'];
      $state_1 = $_GET['state'];
      $user_id_1 = $_SESSION['id'];
      $find_query_1 = "SELECT * FROM `cart` WHERE user_id=".$user_id_1." AND product_id=".$product_id_1;
      $find_result_1 = mysqli_query($con,$find_query_1);
      $row_find_1 = mysqli_fetch_array($find_result_1);
      $quantity_1 = $row_find_1['quantity'];
      if($state_1 == 'up' && $quantity_1<10){
        $quantity_1 = $quantity_1 + 1;
        $update_query_1 = "UPDATE cart set quantity = ".$quantity_1." where user_id=".$user_id_1." and product_id=".$product_id_1.";";
        mysqli_query($con,$update_query_1);
      }
      else if($state_1 == 'down' && $quantity_1 > 0){
        $quantity_1 = $quantity_1 - 1;
        if($quantity_1 == 0){
          $remove_query = "DELETE from cart where user_id=".$user_id_1." and product_id=".$product_id_1;
          mysqli_query($con,$remove_query);
        }else{
          $update_query_1 = "UPDATE cart set quantity = ".$quantity_1." where user_id=".$user_id_1." and product_id=".$product_id_1.";";
          mysqli_query($con,$update_query_1);
        }
      }
      echo "<script>window.location.href='cart_display.php'</script>";
    }
 ?>
