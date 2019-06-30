<html>
<head>
	<meta charset="UTF-8"/>
	<title>Kahhve.com</title>
	<link rel="stylesheet" type="text/css" href="Style/HeaderStyle.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<a href="index.php?navigate=homepage"><img src="Resimler/MainIcon.png" class="resim" width="70" height="70" ></a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php?navigate=kahveler">Kahhveler</a></li>
					<li><a href="Ekipman&Aksesuarlar.html">Ekipman&Aksesuarlar</a></li>
					<li><a href="TanışmaSetleri.html">Tanışma Setleri</a></li>
					<li><a href="Markalar.html">Markalar</a></li>
					<li><a href="Kültür.html">Kültür</a></li>
					<li><a href="Hediyelikler.html">Hediyelikler</a></li>
					<!-- <li><input type="button" class="button" value="GİRİŞ" onclick="window.location.href = 'Index.php?navigate=login'"></li> -->
					<?php
					session_start();
					if(isset($_SESSION['login_user'])){
						echo '<li><a class="ara">Hesabım</a>
						        <ul class="sub-menu">
							        <li><a href="Index.php?navigate=bilgilerim">Bilgilerim</a></li>
								    <li><a>Abonelik</a></li>
								    <li><a>Adreslerim</a></li>
								    <li><a>Siparişlerim</a></li>
								    <li><a href="Index.php?navigate=logout">Çıkış Yap</a></li>
						        </ul>
						      </li>';
						//echo '<li><input type="button" class="button" value="GİRİŞ" onclick="window.location.href = "Index.php?navigate=login"></li>';					
					}
					else{
						echo '<li><a class="ara" href="Index.php?navigate=login">Giris</a></li>';
						//echo '<li><input type="button" class="button" value="GİRİŞ" onclick="window.location.href = "Index.php?navigate=login"></li>';
				
					}
					?>
					
                    <li><input type="button" class="button1"></li>
                    <li><a href="index.php?navigate=sepet"><input type="button" class="button2"></a></li>
				</ul>
				
			</nav>

		</div>
	</header>