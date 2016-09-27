<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
if(!isset($_POST["email"]))
{
	include_once('vue/user/inscription.php');
}
else
{

	include_once('modele/user/verif_login_inscription.php');
	$verif = verif_login();

	if($verif) {
		include_once('core/mail.php');
		$envoie_mail = envoie_mail($mail_user, $prenom, $cle);

		require_once('modele/user/inscription.php');
		$retour = inscription($_POST);
		if ($retour) {
			header("Location:?module=user&action=connexion&notif=ok");
		} else {
			header("Location:?module=user&action=inscription&notif=nok");
		}
	}
	else
	{
		header("Location:?module=user&action=inscription&notif=nok");
	}
}