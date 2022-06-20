<?php
// the aim of this file is to establish a connection with mysql database

//variable declaration  and assignment of value
$server_name ="localhost";
$username = "alex";
$password= "kimani9171"; 
$database = "ecommerce_project";
// establishing a connection to the database

$conn = mysqli_connect($server_name,$username,$password,$database);

if(!$conn){
    die("Could not connect to the database".mysqli_connect_error());

}


?>