 <?php session_start();
 	
	include "baglanti.php";	
	$girilen=$_POST["girilen"];
	$kod=$_POST["kod"];
	$id=$_POST["id"];
	if($girilen == $kod)
	{
		$_SESSION["id"] = $id;
		header("location:profil-ayarlari.php");
	
	}
	else
	{
		
		header("location:giris-yap.php");
	}
	
 ?>
