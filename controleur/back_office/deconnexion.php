<?php

	   if(!isset($_SESSION['user']))
	   {
	   		header('location:');
	   }
	   else if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
	   {
	   		session_unset();
	   		header('Location:?deconnexion=ok');
		   //include('vue/back_office/index.php');
	   }
	   else
	   {
	   		header('Location:?&notif=nok');
	   }