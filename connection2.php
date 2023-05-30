<?php

$host='localhost';

$user = 'root';
$pswd = '';
$dbname = 'users';

$conn = mysqli_connect($host, $user, $pswd, $dbname);

if(empty($conn))
{
   die("connection failed" . mysqli_connect_error());
}
else
{

}

