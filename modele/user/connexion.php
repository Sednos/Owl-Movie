<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	function connexion($form)
	{
		global $connexion;

		try
		{
			$query=$connexion->prepare('SELECT * FROM om_user
											WHERE login=:login
											AND pass=:pass');
		
			$query->bindParam(':login', $form['login'], PDO::PARAM_STR);
			$query->bindParam(':pass', $form['pass'], PDO::PARAM_STR);
			$query->execute();
			$user=$query->fetch();

			$query->closeCursor();

			return $user;

		}
		catch (Exception $e)
		{
			$query->closeCursor();
			return false;
		}
	}