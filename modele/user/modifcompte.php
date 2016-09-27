<?php
	function modif_compte($modifcompte)
	{
		global $connexion;
		
		try{
			// on envoie la requete
			$query = $connexion->prepare('UPDATE om_user set login=:login, email=:email, code_postal=:code_postal, display_name=:display_name WHERE id=:id');
			$query->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
			$query->bindParam(':login', $modifcompte['login'], PDO::PARAM_STR);
			$query->bindParam(':email', $modifcompte['email'], PDO::PARAM_STR);
			$query->bindParam(':code_postal', $modifcompte['code_postal'], PDO::PARAM_STR);
			$query->bindParam(':display_name', $modifcompte['display_name'], PDO::PARAM_STR);
			$query->execute();
			return true;
		}
		catch( Exception $e ){
			return false;
		}
	}