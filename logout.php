<?php
   session_start();

   date_default_timezone_set('Asia/Kolkata');
   $dt =date("Y-m-d H:i:s");
   $con = mysqli_connect("localhost:3306","root","","shoppingdb");
 if($con)
   {
        $query = "insert into lotable(out_date_time) values('$dt')";
     if(mysqli_query($con,$query))
       echo("<br/> Inserted successfully </br/> ");
     else
       echo("<br/> Insertion Failed </br/> ");
   }
   session_destroy();
   echo("<br/> U r succefully logged out");
   echo("<br/> <a href='login.php'> Login again? </a>");

?>  