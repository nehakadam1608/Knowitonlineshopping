<?php    session_start();           ?>    
<?php 

   $uid = $_REQUEST["uid"]; 
   $pwd = $_REQUEST["pwd"];
  
   date_default_timezone_set('Asia/Kolkata');
   $dt =date("Y-m-d H:i:s");
	 
   $con = mysqli_connect("localhost:3306","root","","shoppingdb");
  
   if($con)
   {
        $query = "insert into lotable(uid,log_date_time) values('$uid' ,'$dt')";
     if(mysqli_query($con,$query))
       echo("<br/> Registered successfully </br/> ");
     else
       echo("<br/> Insertion Failed </br/> ");
	$query = "select * from users where u_id = '$uid' and password = '$pwd'";
        $result = mysqli_query($con,$query);
        
        if(mysqli_num_rows($result) == 1)   //successful
        {  
            $_SESSION["u_id"] = $uid;
            $row = mysqli_fetch_assoc($result);
            $_SESSION["fullname"] = $row["fname"]." ".$row["lname"];
            $_SESSION["email"] = $row["emailid"];
	    $_SESSION["contact"] = $row["contact"];	
	    setcookie("loginerror","",time()-60);
	    header('Location: categories.php');
        }
	else    //failed
        {
            setcookie("loginerror","Wrong ID/PWD");
	    header('Location: login.php');	
        }
      
   }
    

?>