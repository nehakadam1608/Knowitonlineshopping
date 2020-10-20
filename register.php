<?php
  
  $uid=$_REQUEST["uid"];
  $pwd=$_REQUEST["pwd"];
  $fname=$_REQUEST["fname"];
  $mname=$_REQUEST["mname"];
  $lname=$_REQUEST["lname"];
  $email=$_REQUEST["email"];
  $contact=$_REQUEST["contact"];

  $con=mysqli_connect("localhost:3306","root","","shoppingdb");
  if($con)
  {
    $query="insert into users values ('$uid','$pwd','$fname','$mname','$lname','$email',$contact)";
    if(mysqli_query($con,$query))
       echo("<br/> Registered successfully </br/> ");
    else
       echo("<br/> Insertion Failed </br/> ");
  }

   print_r($_FILES["photo"]);
   echo("photos/".$uid.".jpg");
   if(move_uploaded_file($_FILES["photo"]["tmp_name"],"photos/".$uid.".jpg"))
	echo("<br/> Photo uploaded");

   echo("Want to proceed for <a href='login.php'>login?</a>");




?>