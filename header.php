<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap.min.js"></script>
    <script src="jquery-3.5.1.min"></script>
    <title>Login</title>
</head>
<body>
<div class="row">
       <div class="col-md-4">
                <img class="img-thumbnail mx-auto d-block" src="photos/neha.jpg" height="100" width="100" />
       </div>
       <div class="col-md-6">
                <h1>Welcome To Shopping</h1>
       </div>
  </div>
</body>
</html>
<?php    session_start();        ?>
<?php
      

     echo("<div style='overflow:auto'>");

     if(isset($_SESSION["uid"]))
    {
	   $src = "photos/".$_SESSION["uid"].".jpg";
	   echo("<img src='$src' width='80' height='80' style='float:left'/>");
    }


    if(isset($_SESSION["fullname"]))
        echo("<h1> Welcome ".$_SESSION["fullname"]." !!! </h1>");
    else
	echo("<h1> Welcome GUEST !!! </h1>");
   
     echo("</div>");


    echo("<br/> <hr/>");

?>