<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");
function inscription($inscription){

	global $connexion;
	try
	{	
		$query = $connexion->prepare("insert into om_user
				(login, email, pass, code_postal, display_name, cle)
				values
				(:login, :email, :pass, :code_postal, :display_name, :cle)");
		$query->bindValue(':login', $inscription["login"], PDO::PARAM_STR);
		$query->bindValue(':email', $inscription["email"], PDO::PARAM_STR);
		$query->bindValue(':pass',  md5($inscription["pass"]), PDO::PARAM_STR);
		$query->bindValue(':code_postal',  $inscription["code_postal"], PDO::PARAM_INT);
		$query->bindValue(':display_name',  $inscription["display_name"], PDO::PARAM_STR);
		$query->bindValue(':cle',  $inscription["cle"], PDO::PARAM_STR);


		$query->execute();
		return true;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
		return false;
	}
}