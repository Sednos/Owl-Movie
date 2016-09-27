<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function modif_pass($modifpass)
	{
		global $connexion;

		try
		{
			$query=$connexion->prepare('UPDATE owm_user set pass=:pass
											WHERE id=:id');
		
			$query->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
			$query->bindParam(':pass', $modifpass['pass'], PDO::PARAM_STR);
			$query->execute();
			$user=$query->fetch();

			$query->closeCursor();

			return $modifpass;

		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}