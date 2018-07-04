<?php


$baglanti = @mysql_connect("localhost","root")or die("Veritabanýna baðlanamadý".@mysql_error());
@mysql_select_db("hastane")or die("Baglanti Hatasi".@mysql_error());
mysql_query("SET NAMES UTF8");
/*@mysql_query("insert into ortopedi(unvan,ad,soyad,oda)values('$unvan','$ad','$soyad','$oda')",$baglanti)or die("Veri eklenemedi".@mysql_error());
echo"Veri eklendi";*/




/*try{
	$dbpdo = new PDO('mysql:host='localhost ';dbname='.hastane,root);
	$dbpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
	
	echo 'Baglanti hatasi'.$e->getMessage();
	die();
	
}
*/
?>