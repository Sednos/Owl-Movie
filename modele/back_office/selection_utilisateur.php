<?php

function selection_utilisateur()
{
	global $connexion;

	try{
		// on envoie la requete
		if(isset($_POST['recherche']))
		{
			$recherche = htmlspecialchars($_POST['recherche']);
			$query = $connexion->prepare("SELECT * from owm_user WHERE login LIKE '%".$recherche."%' OR display_name LIKE '%".$recherche."%' OR email LIKE '%".$recherche."%' ORDER BY display_name");
		}
		else if(!isset($_POST['recherche']))
		{
			$query = $connexion->prepare("SELECT * from owm_user ORDER BY display_name");
		}
			// on execute la requete
			$query->execute();
			// on recup les resultats
			$utilisateurs = $query->fetchAll();
			// on ferme le cursor
			$query->closeCursor();
			// on retourne les articles selectionnés
			return $utilisateurs;

		}
		catch( Exception $e )
		{
		//echo $e->getMessage();
		$query->closeCursor();
		return false;
	}
}