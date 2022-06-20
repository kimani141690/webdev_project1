<?php
//php program for multi dimentional arrayss
 $myarray=array(
    array("Ankit","Ram","Shyam"),
    array("Unnao","Trichy","Kanpur")
);
//dipsplay information
 echo"<pre>";
 echo"Indexed array Has got a numeric key";
 print_r($myarray);
 echo"</pre>";
print_r($myarray [1][2]);

$data=[
    'Game of Thrones' =>['Jamie Lannister','Catelyn Stark','cersei lannister'],
    'Black Mirror' =>['Nanette Cole','Selma Tesle','Karin Parke']
];
 echo"<pre>";
 echo"Associative array use named keys";
print_r($data);
 echo"</pre>";

 echo'<h1>Famous Tv Series and Actors </h1>';
 foreach($data as $series =>$actors){
echo"<h2>$series</h2>";

foreach($actors as $actors)
{
    echo"<div>$actors</div>";

}

 }
?>