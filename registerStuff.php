<?php
ob_start();
require_once 'connection2.php';

$username = $_REQUEST['rname'];
$hashed_passoword = password_hash($_REQUEST['rpass'], PASSWORD_DEFAULT);

$query = "SELECT `username` FROM `userdata` WHERE username = '$username';";
$result = mysqli_query($conn , $query);

if(mysqli_num_rows($result) == 1)
{
      header('location:register.php?result == alreadypresent');
}
else
{
   $query = "INSERT INTO `userdata`(username, password) VALUES ('" . $username . "' , '" . $hashed_passoword . "')";
   
   $result = mysqli_query($conn , $query);

   if ($result == 1)
   {
       header('location:register.php?result=success');
   }
   else
   {
       header('location:register.php?result=fail');
   }
}
?>