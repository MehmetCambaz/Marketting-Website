<head>
	<meta charset="UTF-8"/>
	<title>Kahhve.com</title>
	<link rel="stylesheet" type="text/css" href="Style/MainStyle.css">
</head>

<div class="OrtaResim">
    <img src="Resimler\p1.png" class="OrtaResim">
</div>

<div class="PopulerTanismaSetleri">
	<p align="center" class="yazı">POPÜLER TANIŞMA SETLERİ</p>
	
    <div class="KTSeti">
	    <?php $_GET['id'] = 1; include("getImage.php"); echo '<a href="index.php?navigate=product&id=1&table=products"><img src="'.$src.'" class="ktseti1"></a>'; ?>
		<?php $_GET['id'] = 1; include("getImage.php"); echo '<p>'.$name.'</p>'; ?>
		<?php $_GET['id'] = 1; include("getImage.php"); echo '<p>'.$producer.'</p>'; ?>
		<?php $_GET['id'] = 1; include("getImage.php"); echo '<p>'.$price.'</p>'; ?>
    </div>
    <div class="V60TSeti">
	    <?php $_GET['id'] = 2; include("getImage.php"); echo '<a href="index.php?navigate=product&id=2&table=products"><img src="'.$src.'" class="V60TS"></a>'; ?>
        <?php $_GET['id'] = 2; include("getImage.php"); echo '<p>'.$name.'</p>'; ?>
        <?php $_GET['id'] = 2; include("getImage.php"); echo '<p>'.$producer.'</p>'; ?>
		<?php $_GET['id'] = 2; include("getImage.php"); echo '<p>'.$price.'</p>'; ?>
    </div>
    <div class="FPTSeti">
	    <?php $_GET['id'] = 3; include("getImage.php"); echo '<a href="index.php?navigate=product&id=3&table=products"><img src="'.$src.'" class="FPTS"></a>'; ?>
        <?php $_GET['id'] = 3; include("getImage.php"); echo '<p>'.$name.'</p>'; ?>
        <?php $_GET['id'] = 3; include("getImage.php"); echo '<p>'.$producer.'</p>'; ?>
		<?php $_GET['id'] = 3; include("getImage.php"); echo '<p>'.$price.'</p>'; ?>
   </div>
   <div class="MPTSeti">
       <?php $_GET['id'] = 4; include("getImage.php"); echo '<a href="index.php?navigate=product&id=4&table=products"><img src="'.$src.'" class="MPTS"></a>'; ?>
       <?php $_GET['id'] = 4; include("getImage.php"); echo '<p>'.$name.'</p>'; ?>
       <?php $_GET['id'] = 4; include("getImage.php"); echo '<p>'.$producer.'</p>'; ?>
	   <?php $_GET['id'] = 4; include("getImage.php"); echo '<p>'.$price.'</p>'; ?>
   </div>
   <div class="TG">
       <p class="TGtext">TÜMÜNÜ GÖR</p>
   </div>
</div>
<div class="PM">
<p class="PMheader">POPÜLER MARKALAR </p>
<img src="Resimler/chemex.png" class="chemex">
<img src="Resimler/bialetti.png" class="bialetti">
<img src="Resimler/hario.png" class="hario">
<img src="Resimler/bodum.png" class="bodum">
<img src="Resimler/aeropress.png" class="aeropress">
<img src="Resimler/coolbeans.png" class="coolbeans">

<div class="PMTG">
<p class="PMfooter">TÜMÜNÜ GÖR</p>
</div>

</div>

</body>
</html>