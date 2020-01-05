<?php include 'baglanti.php';
	
$sorgu = $db->exec("insert into musteri (isim,telefon,email,sifre) values ('".$_POST["fname"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["pword"]."')");
				if($sorgu)
					echo "Kayıt oldun.";
				else
					echo "Hata oluştu.";

				header("Refresh: 2; url=giris-yap.php");	


 ?>