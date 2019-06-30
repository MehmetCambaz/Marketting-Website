
<head>
	<meta charset="UTF-8"/>
	<title>Kahhve.com</title>
	<link rel="stylesheet" type="text/css" href="Style/KahvelerStyle.css">
</head>


<div class="Main">


<div class="OrtaResim" class="OrtaResim">
    <img src="Resimler\p3.png">
</div>

<div class="Urunler">

<?php
include("getData.php");

$ProductID = 1;
$table = 'Kahveler';

echo '<table class="ProductTable">';

for($i = 1;$i < 10;$i++){
	echo '<tr>';
	for($j = 1;$j <= 3;$j++){
		if(getName($db,$ProductID,$table) == null){
			break;
		}
		
		echo '<td><a href="index.php?navigate=product&id='.$ProductID.'&table=Kahveler"><div class="Products"';
	    echo '<a href="index.php?navigate=product&id='.$ProductID.'"><img src="'.getImage($db,$ProductID,$table).'" class="Img"></a>';
		echo '<p>'.getName($db,$ProductID,$table).'</p>';
		echo '<p>'.getProducer($db,$ProductID,$table).'</p>';
		echo '<p>'.getPrice($db,$ProductID,$table).'</p>';
		$ProductID++;
		echo '</div>';
		echo '</td>';
		
		
	}
	echo '</tr>';
}

echo '</table>';
?>

</div>
</div>
</body>