<head>
	<meta charset="UTF-8"/>
	<title>Kahhve.com</title>
	<link rel="stylesheet" type="text/css" href="Style/ProductStyle.css">
</head>

<?php
include("getData.php");

if(isset($_GET['id'])){
    $current_id = $_GET["id"];
}

if(isset($_GET['table'])){
    $current_table = $_GET["table"];
}

?>

<?php

if(isset($_POST["sepete_ekle"])){
	
	if(isset($_COOKIE["Sepet"])){
		$cookie_data = stripslashes($_COOKIE["Sepet"]);
		
		$cart_data = json_decode($cookie_data, true);
	}
	else{
		$cart_data = array();
	}
	
	$item_id_list = array_column($cart_data, 'item_id');
	
	if(in_array($_POST["HiddenName"], $item_id_list)){
		
		foreach($cart_data as $keys => $values){
			if($cart_data[$keys]["item_name"] == $_POST["HiddenName"]){
			    $cart_data["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["Adet"];
			}
		}
	}
	else{
		$item_array = array(
	    'item_table' => $_POST["HiddenTablo"],
		'item_id' => $_POST["HiddenID"],
		'item_name' => $_POST["HiddenName"],
		'item_producer' => $_POST["HiddenProducer"],
		'item_ogutme_boyutu' => $_POST["HiddenOgutmeBoyutu"],
		'item_price' => $_POST["HiddenPrice"],
		'item_quantity' => $_POST['Adet'],
	    );
	    $cart_data[] = $item_array;
	}
	
	$item_data = json_encode($cart_data);
	setcookie('Sepet',$item_data, time()+ (60 * 5));
	
}

?>


<div class="Product">
    <div class="ProductImage">
	    <?php echo  '<img src="'.getImage($db,$current_id,$current_table).'" id="img1">'; ?>
	</div>
	
	<div class="ProductFeature">
	    <form method="POST">
	    <?php echo '<a id="a1">'.getName($db,$current_id,$current_table).'</a>'; ?>
		<input type="hidden" name="HiddenName" value="<?php echo getName($db,$current_id,$current_table) ?>">
		</br>
		<?php echo '<a id="a2">'.getProducer($db,$current_id,$current_table).'</a>'; ?>
		<input type="hidden" name="HiddenProducer" value="<?php echo getProducer($db,$current_id,$current_table) ?>">
		</br>
		</br>
		<?php echo '<a id="a3">'.getPrice($db,$current_id,$current_table).' TL</a>'; ?>
		<input type="hidden" name="HiddenPrice" value="<?php echo getPrice($db,$current_id,$current_table) ?>">
		</br>
		</br>
		</br>
		
        <select id="OgutmeBoyutu" name="ogutmeboyutu">
            <option value="French Press">French Press</option>
            <option value="Chemex">Chemex</option>
            <option value="Metal Filtre">Metal Filtre</option>
            <option value="Kağıt Filtre">Kağıt Filtre</option>
            <option value="Hario">Hario</option>
            <option value="Aeropress">Aeropress</option>
			<option value="Moka Pot">Moka Pot</option>
			<option value="Espresso">Espresso</option>
			<option value="Soğuk Demleme">Soğuk Demleme</option>
			<option value="Çekirdek">Çekirdek</option>
			<option value="Syphon">Syphon</option>
        </select>
		<?php
            //if(isset($_POST["ogutmeboyutu"])){
            //$selected_val = $_POST["OgutmeBoyutu"];
            //echo '<input type="hidden" name="HiddenOgutmeBoyutu" value="'.$_POST["ogutmeboyutu"].'"';
            //}
			echo '<input type="hidden" name="HiddenOgutmeBoyutu" value="OgutmeBoyutu"';
        ?>
		

		</br>
		</br>
		<a class="adet">Adet : </a>
		<input type="text" name="Adet" class="adetButton" value="1">  
		<input type="submit" name="sepete_ekle" class="button3" value="Sepete Ekle">
		</br>
		<input type="hidden" name="HiddenID" value="<?php echo $current_id ?>">
	    <input type="hidden" name="HiddenTablo" value="<?php echo $current_table ?>">
        </form>
		
		
	</div>
	

	
</div>