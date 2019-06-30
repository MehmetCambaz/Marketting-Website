<head>
	<meta charset="UTF-8"/>
	<title>Kahhve.com</title>
	<link rel="stylesheet" type="text/css" href="Style/SepetStyle.css">
</head>

<div class="Sepet">	
        <div class="ust_sepet">
		</br>
		</br>
        <a class="sepet_a1">SEPETİNİZ</a>
		</br>
        <a class="sepet_a2">Siparişinizi hemen tamamlayabilirseniz ürünleriniz yarın kargoda.</a>
		</div>
		<?php
		    include("getData.php");
		    if(isset($_COOKIE["Sepet"])){
				$total = 0;
				$cookie_data = stripslashes($_COOKIE['Sepet']);
				$cart_data = json_decode($cookie_data, true);
				$sepet_id = 0;
				
				foreach($cart_data as $keys => $values){
					$sepet_id++;
        ?>          
					
					<div class="sepet_urun">
					    <div class="sepet_img">
					    <?php echo  '<img src="'.getImage($db,$values["item_id"],$values["item_table"]).'" id="img_urun">'; ?>
						</div>
						<div class="sepet_info">
						</br>
						</br>
						</br>
					    <?php echo '<a id="sepet_baslik">'.$values["item_name"].'</a>' ?>
						</br>
						</br>
						</br>
						<?php echo '<a id="sepet_producer">'.$values["item_producer"].'</a>' ?>
						</br>
						</br>
						<?php echo '<a id="sepet_boyut">'.$values["item_ogutme_boyutu"].'</a>' ?>
						<?php echo '<a id="sepet_adet">Adet : '.$values["item_quantity"].'</a>' ?>
						<form method="POST">
						<?php echo '<input type="submit" id="'.$sepet_id.'" name="cikar" class="button_cikar" value="'.$sepet_id.'">'; ?>
						
						<?php
						if(isset($_POST["cikar"])){
							$cookie_data = stripslashes($_COOKIE['Sepet']);
				            $cart_data = json_decode($cookie_data, true);
							
							foreach($cart_data as $keys => $values){
								if($_POST['cikar'] == $cart_data[$keys]["item_id"]){
									unset ($cart_data[$keys]);
								}
							}
							
						}
						
						
						?>
						
						
						</form>
						</br>
						</br>
						</br>
						<?php echo '<a id="sepet_fiyat">'.number_format($values["item_quantity"] * $values["item_price"], 2).' TL</a>'  ?>
						</div>
						
					</div>
					
                    <?php
                        $total = 0;					
				        $total = $total = ($values["item_quantity"] * $values["item_price"]);					
				    ?>
				<?php
			    }
			}
			else{
				echo '<p align="middle">Sepetinizde Urun Bulunmamaktadır</p>';
			}
			?>
			<div class="sepet_kargo">
			</br>
			</br>
			<a class="kargo_a1">Kargo Ücreti: </a> 
			<a class="kargo_a2">Ücretsiz </a>
			</div>
			<?php
			if(isset($_COOKIE["Sepet"])){
				echo '<div class="sepet_alt"';
				echo '<textarea rows = "5" cols = "200" style="background-color:white; border:solid; margin-top:20px; border-color:#C65800; width:400px; margin-left:100px;">Sipariş Notunuz</textarea>';
			    echo '<a class="sepet_toplam">Toplam</a>';
				echo '</br>';
				echo '<a class="sepet_ucret">'.number_format($total, 2).'</a>';
				echo '</div>';
			    }
			?>

</div>