
<?php
   include("header.php");   
   
   $con = mysqli_connect("localhost:3306","root","","shoppingdb");
   if(isset($_SESSION["cart"]))
   {
       echo("<table border=1>");
       $total = 0;
       foreach($_SESSION["cart"] as $p)
       {
	     echo("<tr>");
	     $query = "select * from product where p_id = $p";	
             $result = mysqli_query($con,$query);
             
             while($row = mysqli_fetch_assoc($result))
             {
                 $pnm = $row["p_name"];
		 $desc = $row["p_description"];
		 $pr = $row["p_price"];
                 $total += $pr;
		 echo("<td>".$pnm."</td>");
                 echo("<td>".$desc."</td>");
                 echo("<td>".$pr."</td>");
             }   
	     echo("</tr>");
             
       }
       echo("<tr> <td colspan='2'> Total Cost </td> <td> $total </td> </tr>");
       echo("</table>");
       $_SESSION["total"]=$total;
   }
   else
   {	
	echo("<br/> No Products are selected");
   }
   echo("<br/> <a href='categories.php'> More Selection? </a>");
   echo("<br/> <a href='confirm.php'> Confirm Cart </a> ")


?>