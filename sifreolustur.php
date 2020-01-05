<?php include "baglanti.php";

	$sifre = $_POST["password"];
    $sifre2 = $_POST["repassword"];
    $mail = $_POST["mail"];

    if($sifre != $sifre2)
        header("location:giris-yap.php");
    else
    {
    	$sorgu = $db->exec("update musteri set sifre='".$sifre."' where email='".$mail."'");
    	if ($sorgu) {
    		echo "Şifre değiştirildi";
    	}
    	else echo "hata oluştu";

        header("Refresh: 2; url=giris-yap.php");
    }


 ?>