<!DOCTYPE html PUBLÝC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/
DTD/xhtml-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Basliksiz Belge</title>
	</head>
	<body>
		<form method="post" action="pratisyen.php" enctype="multipart/form-data">
		    
			(Pratisyen)UNVAN Giriniz: <input type="text"name="unvan" /><br />
			AD Giriniz: <input type="text"name="ad" /><br />
			SOYAD Giriniz: <input type="text"name="soyad" /><br />
			ODA Giriniz: <input type="text"name="oda" /><br />
			Fotograf Yukle: <input type="file" name="resim" /><br />
			<input type="submit" name="btn" value="Kaydet" />
		</form>
	</body>




<?php

@$kontrol = $_POST['btn'];

if($kontrol)
{
	$unvan = $_POST['unvan'];
	$ad = $_POST['ad'];
	$soyad = $_POST['soyad'];
	$oda = $_POST['oda'];
	$resim = $_POST['resim'];
	
	include("baglanti.php");
	mysql_query("insert into pratisyen(unvan,ad,soyad,oda,resim)values('$unvan','$ad','$soyad','$oda','$resim')",$baglanti)or die("Veri eklenemedi".mysql_error());
	echo'Veri eklendi';
	
	
}

?>
	
	
</html>