<?php
 
 require("connect.php");

 $subcategoryName = $_POST["sub_category_name"];
 $subcategoryID = $_POST["sub_category_id"];
 $categoryID = $_POST["category_id"];
 

$sql = "INSERT INTO sub_category(sub_category_id,sub_category_name,categoryID,isDeleted) VALUES('$subcategoryID','$subcategoryName','$categoryID','0')";
 if(mysqli_query($conn,$sql)){
 echo"New record created successfully"."<br/>";

 }
 else{

     echo"Error:" .$sql. "<br/>" .mysqli_error($conn);
 }



?>