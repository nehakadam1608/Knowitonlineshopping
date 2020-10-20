<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body >
<div>
   <?php        include("header.php");        ?>
   <?php
      if(isset($_COOKIE["loginerror"]))
      echo("<p style='color:red'>".$_COOKIE["loginerror"]."</p>");

   ?> 
  
    <form action="logincheck.php">
           UID : <input type="text" name="uid" /> <br/>
           PWD : <input type="password" name="pwd" /> <br/>
          <input type="submit" value="LOGIN" /> 
    </form>

    <br/>
    <br/>
    <a href="register.html">  New User? Register Here </a>

   </div> 
</body>
</html>
