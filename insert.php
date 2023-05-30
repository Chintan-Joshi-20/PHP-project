<?php

    require_once 'check_username.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add electronics</title>

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
       background-color: MintCream;
       border: solid IndianRed 5px;
    }

    body
    {
      background-color: LightSkyBlue;
    }

    p
    {
       text-align: center;
       font-size: 30px;
       font-style: italic;
       color: LavenderBlush;
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
                  <td> <a href = "view.php"> View the Products </a> </td>

                
            </tr>
          </table>

<hr>

</header>


    <p> Welcome to this page where you can add the products into the database :) </p>

<form action = "insert1.php" method = "post">

    <fieldset>
        <legend style = "text-align: center;"> Enter the details in the below fields </legend>

            <table>
                     <tr>
                         <lable>                          
                           <td> Add Product Name:  <input type = "text" name = "pname" class = 'uname'> </td>
                         </label>
                     </tr>

                    <tr>
                        <label>                          
                           <td> Add Product Price: <input type = "text" name = "price" class = 'uname'> </td>
                        </label>
                    </tr>

                    <tr>
                        <label>
                           <td> <input type = "submit" value = "Add" class = "button1"> </td>
                        </label>
                    </tr>
            </table>
    </fieldset>
</form>

<?php

      if(isset($_REQUEST['result']))
      {
         $result1 = $_REQUEST['result'];
         if($result1 == 'success')
         {
            echo "Product added!";
         }
         else
         {
           echo "Product not added :(";
         }
      }

?>
</body>
</html>