<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Users</title>

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
       font-size: large;
    }

    hr
    {
       border: solid LightSalmon 3px;
    }

    fieldset
    {
       align-items: center;
       font-size: large;
       background-color: PowderBlue;
       border: solid IndianRed 5px;
    }

    body
    {
      background-color: Teal;
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


<form action = "registerStuff.php" method = "post">    
    <fieldset>
    <legend style = "text-align:center;"> Enter your details here! </legend>
        <table>

            <tr>
                <td>
                  <lable>
                    Username: <input type = "text" name = "rname" class = "uname"> 
                  </lable>  
                </td>
            </tr>

            <tr>
                <td>
                    <label>
                     Password: <input type = "password" name = "rpass" class = "uname">
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label>
                    <div class = "centerr">
                    <input type = "submit" name = "registerUser" value = "Register" class = "button1">
                    </div>
                    </label>
                </td>
            </tr>

    </fieldset>
</form>

<?php

                if(isset($_REQUEST['result']))
                {
                        if($_REQUEST['result'] == "alreadypresent")  
                        {
                            echo "<p> Username already exists. Please try again. </p>";
                        }

                        else if ($_REQUEST['result'] == "success")
                        {
                            echo "<p> User registered succesfully </p>";
                        }
                        else if ($_REQUEST['result'] == "fail")
                        {
                            echo "<p> User wasn't registered successfully blame the programmer who wrote this code cuz he is dumb </p>";
                        }
                }


?>
</body>
</html>