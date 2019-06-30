<?php
   include("Config.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
		 session_start();
         $_SESSION['login_user'] = $myusername;
		 
		//echo $_SESSION['login_user'];
		
	    header("location: Index.php?navigate=homepage");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<head>
	<meta charset="UTF-8"/>
	<title>Kahhve.com</title>
	<link rel="stylesheet" type="text/css" href="Style/LoginStyle.css">
</head>

<div class="main">
		<div class="UcanGiris">
			<img src="Resimler/UçanGiriş.png" class="">
		</div>

		<div class="input">
			<form action = "" method = "post">
                  <input type = "text" name = "username" class = "box" placeholder="Mail Adresiniz"/><br /><br />
                  <input type = "password" name = "password" class = "box" placeholder="Şifreniz" /><br/>
				  <a href="Index.php?navigate=register">Yeni Kullanıcı</a>
				  <br/>
                  <input type = "submit" class="gonder" value = " Giriş Yap "/><br />
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