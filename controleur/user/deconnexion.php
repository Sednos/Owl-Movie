<?php

	   if(!isset($_GET['action']) && !isset($_SESSION['user'])) 
	   {
	   		include_once('vue/enseignant/connexion.php');
	   }
	   else if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
	   {
	   		session_unset();
	   		header('Location:?&deconnexion=ok');
	   }
	   else
	   {
	   		header('Location:?&notif=nok');
	   }