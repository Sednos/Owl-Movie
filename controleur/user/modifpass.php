<?php
	
	if($_SESSION['user']['valid']== 1)
	{
		include_once('modele/user/verif_mail_modif_pass.php');
		$verif_mail = verif_mail()

		if $verif_mail(){

			$nom_expediteur = 'Owl Movie';
			$email_expediteur = $_POST['mail_expediteur'];
			$email_reply = 'owlmovie@gmail.com';
			$destinataires = $_POST['email'];
			$sujet = $_POST['sujet'];
			$titre = 'Modification de mot de passe';
			$messagemail = 'Bonjour ' .$_POST['display_name']. ', pour changer votre mot de passe, merci de vous rendre sur ce lien : <a href="http://gosset.etudiant-eemi.com/perso/2A%20-%20DEV/owl_movie/?module=user&action=modif_pass_form">changer mon mot de passe</a>';

			include_once('lib/mail.php');
			envoie_mail($nom_expediteur, $email_expediteur, $email_reply, $destinataires, $sujet, $messagemail, $titre, $fichier, $bcc, $jpeg, $jpg, $png, $pdf)
		}
		else{
			header("Location:?module=user&action=modifpass&notif=nok ")
		}
	}