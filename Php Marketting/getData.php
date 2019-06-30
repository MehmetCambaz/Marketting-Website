<?php
include("Config.php");

function getImage($db,$id,$table){
	
    $query="SELECT * FROM $table WHERE id='$id' ";
    $query=mysqli_query($db,$query);
 
    $row=mysqli_fetch_array($query);

    $imageData = base64_encode($row['Image']);
    $src = 'data:image/jpeg;base64,'.$imageData;

    return $src;	
}

function getName($db,$id,$table){
	
    $query="SELECT * FROM $table WHERE id='$id' ";
    $query=mysqli_query($db,$query);
 
    $row=mysqli_fetch_array($query);

    $name = $row['Name'];

    return $name;	
}

function getProducer($db,$id,$table){
	
    $query="SELECT * FROM $table WHERE id='$id' ";
    $query=mysqli_query($db,$query);
 
    $row=mysqli_fetch_array($query);

    $producer = $row['Producer'];

    return $producer;	
}

function getPrice($db,$id,$table){
	
    $query="SELECT * FROM $table WHERE id='$id' ";
    $query=mysqli_query($db,$query);
 
    $row=mysqli_fetch_array($query);

    $price = $row['Price'];

    return $price;	
}

?>