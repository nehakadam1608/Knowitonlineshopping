<?php
   include("header.php");
   $con = mysqli_connect("localhost:3306","root","","shoppingdb");
   $cid = $_REQUEST["cid"];
   $query = "select * from product where cat_id = $cid";
   $result = mysqli_query($con,$query);
   echo("<form action='addtocart.php'>");
   echo("Select product : ");
   echo("<select name='product'>");
   while($row = mysqli_fetch_assoc($result))
   {
        $pid = $row["p_id"];
        $pnm = $row["p_name"]; 
	echo("<option value='$pid'> $pnm </option>");
   } 
   echo("</select> <br/>");
   echo("<input type='submit' value='Add to Cart' />");
   echo("</form>");


?>