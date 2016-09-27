<?php

// Identifiant dserveur localhost

	$dns = 'mysql:host=localhost;dbname=gosset';
	$utilisateur = 'root';
	$motDePasse = '';
	
	$option = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	
	$connexion = new PDO ( $dns, $utilisateur, $motDePasse, $option );