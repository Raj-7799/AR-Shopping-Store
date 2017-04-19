<?php

function get_cat(){
  global $con;
  $get_cat_query = "SELECT DISTINCT cateogary from products";
  $result = mysqli_query($con, $get_cat_query);
  while($row = mysqli_fetch_array($result)){
    echo'<li><a href="products.php?cat='.$row["cateogary"].'">'.$row["cateogary"].'</a></li>';
  }
}

function check_cat(){
  if(isset($_GET['cat'])){
    $cat = $_GET['cat'];
    $query = "select * from products where cateogary='".$cat."';";
    return $query;
  }
  else if(isset($_GET['sort'])){
    $sort = $_GET['sort'];
    if($sort == "A"){
      $query = "SELECT * FROM `products` ORDER BY title ASC";
      return $query;
    }else if($sort == "popular"){
      $query = "SELECT * FROM `products` ORDER BY popular_index ASC";
      return $query;
    }else if($sort == "high"){
      $query = "SELECT * FROM `products` ORDER BY price DESC";
      return $query;
    }else if($sort == "low"){
      $query = "SELECT * FROM `products` ORDER BY price ASC";
      return $query;
    }else{
      $query = "SELECT * FROM products";
      return $query;
    }
  }
  else{
    $query = "SELECT * FROM products";
    return $query;
  }
}



?>
