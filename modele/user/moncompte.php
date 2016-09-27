<?php
	function mon_compte()
	{

		global $connexion;
		
		try{
			// on envoie la requete
			$query = $connexion->prepare('SELECT * from om_user
											WHERE id=:id');
			$query->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
			// on execute la requete
			$query->execute(); 
			// on recup les resultats
			$compte = $query->fetch();
			// on ferme le cursor
			$query->closeCursor();
			// on retourne les articles selectionnés
			return $compte;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}