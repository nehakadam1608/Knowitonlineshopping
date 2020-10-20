<?php
    include("header.php");
    $dt = date("Y-m-d");
    $uid = $_SESSION["uid"];
    $tot = $_SESSION["total"];

   echo("<br/> Cart is confirmed");
   echo("<br/> You will receive the bill on ".$_SESSION["email"]);
   echo("<br/> You will receive the message on ".$_SESSION["contact"]." before deleivery");

    $con = mysqli_connect("localhost:3306","root","","shoppingdb");  
    $query = "insert into shopping(user_id,shoppingDate,totalprice) values('$uid' ,'$dt', $tot)";
    if(mysqli_query($con,$query))
	  echo("<br/>Shopping summary is inserted");
    echo("<br/><a href='logout.php'>  Logout?  </a>");

?>
 

