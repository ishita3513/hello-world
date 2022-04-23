<?php
 $db_name="mysql:host=localhost;dbname=hospital";
 $username="root";
 $password="";

 $conn=new PDO($db_name,$username,$password);
//  if($conn->error){
//      echo "Successfully connected";
//  }
//  else echo "Retry";