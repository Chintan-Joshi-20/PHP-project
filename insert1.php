<?php
  ob_start();
  require_once 'connection.php';
  
  $productName  = $_REQUEST['pname'];
  $productPrice = $_REQUEST['price'];

  $query  = "INSERT INTO `product`(`Name`, `Price`) VALUES ('$productName','$productPrice')";
  $result = mysqli_query($conn , $query);

  if($result == 1)
  {
     header("location:insert.php?result=success");
  }
  else
  {
     header("location:insert.php?result=unsuccessful");
  }

?>