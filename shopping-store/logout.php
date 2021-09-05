<?php
  if(isset($_GET['logout'])){
    session_start();
    session_destroy();
    header('Location : index.php');
    echo("<script>window.location.href='index.php'</script>");
  }
?>
