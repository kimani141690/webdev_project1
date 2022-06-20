<?php
 
 require("connect.php");
 $userName = $_POST["name"];
 $userEmail = $_POST["email"];
 $userPassword = $_POST["cr_password"];


// echo"User Name :" .$userName."<br/>";

// echo"Email Address :" .$userEmail."<br/>";

// echo"Password :" .$userPassword."<br/>";

$sql = "INSERT INTO customer(userName,emailAddress,customerPassword) VALUES('$userName','$userEmail','$userPassword')";
 if(mysqli_query($conn,$sql)){
 echo"New record created successfully"."<br/>";

 }
 else{

    echo"Error:" .$sql. "<br/>" .mysqli_error($conn);
 }



?>