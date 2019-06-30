
<?php
	include('header.php');
?>

<?php
if(isset($_GET['navigate'])){
    $current_page = $_GET["navigate"];
}
else{
	$current_page = "homepage";
}

if(isset($_GET['id'])){
    $current_id = $_GET["id"];
}

if(isset($_GET['table'])){
    $current_table = $_GET["table"];
}


switch ($current_page) {
    case "homepage":
        include 'Main.php';
        break;
    case "login":
        include 'Login.php';
        break;
	case "logout":
        include 'Logout.php';
        break;
	case "register":
        include 'Register.php';
        break;
	case "product":
        include 'Product.php';
        break;
	case "bilgilerim":
        include 'Bilgilerim.php';
        break;
	case "kahveler":
        include 'Kahveler.php';
        break;
	case "sepet":
        include 'Sepet.php';
        break;
    default:
        include 'Main.php';
		
}


?>

<?php
	include('Footer.php');
?>


