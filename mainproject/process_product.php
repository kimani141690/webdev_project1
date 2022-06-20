<?php
require("connect.php");

$productName = $_POST["product_Name"];
$productID = $_POST["productID"];
$subcategoryID = $_POST["sub_category_id"];
$qty = $_POST["stockQuantity"];
$price= $_POST["price"];
$createTime= $_POST["timeCreated"];
$updateTime = $_POST["timeUpdated"];
$description = $_POST["productDesc"];
$productImage = $_FILES['imageFile']['name'];
$product_img_tmp_name = $_FILES['imageFile']['tmp_name'];
$product_img_folder = "projectimages/". $productImage;




$sql = "INSERT INTO products(pName,pID,sub_category_ID,stockQty,price,createdAt,newUpdate,pDescription,imagePath)
values('$productName','$productID','$subcategoryID',$qty,$price,'$createTime','$updateTime','$description','$product_img_folder');";

if(mysqli_query($conn,$sql)){
    move_uploaded_file($product_img_tmp_name,$product_img_folder);

echo"New record created successfully"."<br/>";

}
else{

    echo"Error:" .$sql. "<br/>" .mysqli_error($conn);
}



?>