<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Database</title>

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

    .centerr
    {
       text-align: center;
       align-items: center;
    }

    .button1
    {
      font-size: large;
      border-radius: 20px;
    }

    .button1:hover
    {
      padding: 5px 5px 5px 5px;
      background-color: black;
      color: LightPink;
    }
 
    .uname
    {
       background-color: black;
       color: cyan;
    }

    hr
    {
       border: solid LightSalmon 3px;
    }

    fieldset
    {
       align-items: center;
       font-size: large;
       background-color: DodgerBlue;
       border: solid IndianRed 5px;
    }

    body
    {
      background-color: RosyBrown;
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
        <td> </td>
        <td> <a href = "register.php"> Register </a></td>

      
  </tr>
</table>

<hr>

</header>

<form action="loginStuff.php" method = "post">

      <fieldset>
      <legend style = 'text-align: center; font-size: larger; font-style: bold;'> User details </legend>
      <table>
      
      <tr>
            <td>   
                <label> 
                    Enter your username: <input type = "text" name = "username" class = "uname">
                </label>
            </td>
      </tr>
    <br>
      <tr>
           <td>
                <label>
                Enter your Password: <input type = "password" name = "password" class = "uname">
                </label>
            </td>
      
      </tr>
     </table>
     <br>
    <div class = "centerr">
     <input type = "submit" value = "Submit" class = "button1">
    </div>
     </fieldset>


</form>
    

<?php
    if (isset($_REQUEST['result']))
    {
          if ($_REQUEST['result'] == "fail")
          {
              echo "<p> Login failed. Either username or password is incorrect Please try again. </p>";
          }
    }



?>
</body>
</html>