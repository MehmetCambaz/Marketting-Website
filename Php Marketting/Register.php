<?php
   include("Config.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      
    $myusername = $_POST['username'];
    $mypassword = $_POST['password']; 
	$mypassword_check = $_POST['password_check']; 
     

	if($myusername != null && $mypassword == $mypassword_check){
	    $sql = "INSERT INTO admin(username, password) VALUES('$myusername', '$mypassword')";
        $result = mysqli_query($db,$sql); 
		echo "Kaydınız Yapıldı";
	}
	else if($myusername == null){
		echo "Kullanıcı adı giriniz";
	}
	else if($mypassword != $mypassword_check){
		echo "Şifreleriniz uyuşmuyor";
   }
   }
?>

<html>
<head>
	<meta charset="UTF-8"/>
	<title>Kahhve.com</title>
	<link rel="stylesheet" type="text/css" href="Style/RegisterStyle.css">
</head>
<body>
	<div class="main">
		<div class="UcanGiris">
			<img src="Resimler/UçanGiriş.png" class="">
		</div>

		<div class="input">
			<form action = "" method = "post">
                  <input type = "text" name = "username" class = "box" placeholder="Mail Adresiniz"/><br /><br />
                  <input type = "password" name = "password" class = "box" placeholder="Şifreniz" /><br/><br/>
				  <input type = "password" name = "password_check" class = "box" placeholder="Şifreniz Tekrar"/><br/>
				  <a href="Index.php?navigate=login">Zaten Üyeyim</a>
				  <br/>
                  <input type = "submit" class="gonder" value = " Kaydet "/><br />
			</form>
			
		</div>
	</div>
	<footer>
		<div id="ozellikler">
			<div id="memnuniyet">
				<br>
				<br>
				<br>
				<a>100% MÜŞTERİ MEMNUNİYETİ</a>
				<br>
				<br>
				<a>Memnun kalınmayan ürüne sebep belirtmeden iade imkanı</a>
			</div>
			<div id="aynigun">
				<br>
				<br>
				<br>
				<a>AYNI GÜN KARGOLAMA</a>
				<br>
				<br>
				<a>16:00 a kadar gelen tüm siparişler aynı gün kargolanır</a>
			</div>
			<div id="ucretsiz">
				<br>
				<br>
				<br>
				<a>ÜCRETSİZ KARGOLAMA</a>
				<br>
				<br>
				<a>100 TL üzeri siparişlerde kargo ücreti bizden</a>
			</div>
			<div id="guvenli">
				<br>
				<br>
				<br>
				<a>GÜVENLİ ÖDEME</a>
				<br>
				<br>
				<a>128-bit SSL Encrypted ödeme sistemi ile tek tıkla sipariş</a>
			</div>
			
		</div>
	</footer>



</body>
</html>