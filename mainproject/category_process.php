<?php
 
 require("connect.php");
 $categoryName = $_POST["category_name"];
 $categoryID = $_POST["category_id"];



$sql = "INSERT INTO category(categoryName,categoryID,isDeleted) VALUES('$categoryName','$categoryID','0')";
 if(mysqli_query($conn,$sql)){
 echo"New record created successfully"."<br/>";

 }
 else{

     echo"Error:" .$sql. "<br/>" .mysqli_error($conn);
 }



?>