<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
if(!isset($_POST["login"]))
{
	if(!isset($_SESSION["user"]))
	{
		include_once('vue/user/connexion.php');
	}
	else
	{
		header("Location:?module=site&action=index");
	}
}
else
{
	$form = $_POST;
	$form["pass"] = md5($form["pass"]);
	require_once('modele/user/connexion.php');
	$user = connexion($form);
	if ($user && $user['valid']==1)
	{
		$_SESSION["user"] = $user;
		/*if(isset($_POST["remember"]))
        {
            if (!setcookie ("remember", serialize($_POST), time()+5*60))
            {
                 die("Le cookie ne peut être enregistré !");
            }
        }*/
		header("Location:?module=site&action=index&notif=ok");
	}
	else
	{
		session_unset();
		header("Location:?module=user&action=connexion&notif=nok");
	}
}	