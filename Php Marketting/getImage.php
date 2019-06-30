<?php
include_once("Config.php");

if(isset($_GET['id'])){
	
$id = mysqli_real_escape_string($db, $_GET['id']);
	
$query="SELECT * FROM Products WHERE id='$id' ";
$query=mysqli_query($db,$query);
 
$row=mysqli_fetch_array($query);

$imageData = base64_encode($row['Image']);
$src = 'data:image/jpeg;base64,'.$imageData;

$name = $row['Name'];
$producer = $row['Producer'];
$price = $row['Price'];
}
?>



