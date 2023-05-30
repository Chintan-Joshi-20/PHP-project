<?php
  require_once 'check_username.php';
  require_once 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products from your Database</title>

<style>

header
    {
      align-items: center;
      font-size: larger;
      font-family: "Times New Roman", "Times", "serif";
      background-color: DimGrey;
    }

    a
    {
      color: DarkTurquoise;
    }  

    a:hover
    {
      color: LightCoral;
      text-decoration: none;
    }
 
    h1
    {
       text-align:center;
       color: Cornsilk;
       font-style: italic;
    }

    table
    {
      text-align: center;
      padding: 15px;
      width: 100%;
      height: 70%;
      font-size: larger;
    }
  
    h2
    {
        text-align: center;
        font-size: 35px;
        font-style: italic;
    }   

    section
    {
       text-align: center;
       font-size: 25px;
       background-color: Ivory;
       border: 2px solid LightSkyBlue;
    }

    body
    {
       background-color: MistyRose;
    }   

</style>
</head>
<body>

<header>   
          <table>

            <tr>
                   <h1> Database management system for electronics store </h1>   
            
                  <td><a href="index.php"> Home </a> </td>
                  <td> </td>
                  <td> <a href= "login.php"> Login </a> </td>
                  <td> </td>
                  <td> <a href= "insert.php"> Add Product </a> </td>
                  <td> </td>
                  <td> <a href= "logout.php"> Logout </a> </td>

                
            </tr>
          </table>

<hr style = "border: solid red 2px;">

</header>


<h2> Welcome to Electronics Database! </h2>

<?php

$query = "SELECT * FROM `product` ";
$result = mysqli_query($conn , $query);

      if(mysqli_num_rows($result) > 0)
      {  
          echo "<section>";
          echo "Name " . " Price";
          echo "</section>";
             
          while($row = mysqli_fetch_assoc($result))
          {
             echo "<section>";
             echo "<br> " . $row['Name'];
             echo "     " . $row['Price'];
             echo "</section>";
          }
      }
      else
      {
        echo "<section>";
        echo "Table is empty";
        echo "</section>";
      }

?>


</body>
</html>