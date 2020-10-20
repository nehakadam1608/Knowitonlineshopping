<?php
   
   echo("<br/>File Name:".$_FILES["photo"]["name"]);
   echo("<br/>File Type:".$_FILES["photo"]["type"]);
   echo("<br/>File Size:".$_FILES["photo"]["size"]);
   echo("<br/>Tmp Name:".$_FILES["photo"]["tmp_name"]);
 
   if(move_uploaded_file($_FILES["photo"]["tmp_name"],$_FILES["photo"]["name"]))
      echo("<br/>File Uploaded...");
   else
      echo("<br/>File Not Uploaded...");

   echo("Displaying file.......<br/>");
   $fname=$_FILES["photo"]["name"];

   echo("<img src='".$fname."' width='100' height='100'/>");
    header('Location: login.php');
?>