<?php
   include("header.php");
   echo("<h1> All Categories </h1>");
   $con = mysqli_connect("localhost:3306","root","","shoppingdb");
   $query = "select * from category";
   $result = mysqli_query($con,$query);
   while($row = mysqli_fetch_assoc($result))
   {
	$cid = $row["c_id"];
	$cnm = $row["c_name"];
	$desc = $row["c_description"];
        echo("<br/><a href='selectproduct.php?cid=$cid' title='$desc'> $cnm </a>");
   } 
   
?>