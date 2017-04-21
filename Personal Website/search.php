<?php
global $result_query_key;
global $con;
  if(isset($_GET['search_text'])){
    echo $search_text = $_GET['search_text'];
    while($row_search_1 = mysqli_fetch_array($result_query_key)){
      echo $row_search_1['keyword'];
    }
  }
 ?>
