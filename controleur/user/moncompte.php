<?php
	if(isset($_SESSION["user"]))
	{
		include("modele/user/moncompte.php");
		$compte = mon_compte();
	
		if($compte && !isset($_GET['modif']) && !isset($_GET['paiement']))
		{
			include_once('vue/user/moncompte.php');
		}
		else if($compte && isset($_GET['modif']))
		{
            include_once('modele/user/verif_login.php');
            $verif = verif_login();

            if($verif) {

                    include_once('modele/user/modifcompte.php');
                    $modif = modif_compte($_POST);

                    if ($modif) {
                        header('location:?module=user&action=moncompte');
                    } else {
                        include('vue/probleme.php');
                    }
            }
            else
            {
                header('location:?module=user&action=moncompte&notif=nok');
            }
		}
        else if($compte && isset($_GET['paiement']))
        {
            include_once('modele/paiement/ajouter_commande.php');
            $ajouter_commande = ajouter_commande();
            var_dump($ajouter_commande);exit;

            if($ajouter_commande)
            {
                header('location:?module=user&action=moncompte');
            }
            else
            {
                include('vue/probleme.php');
            }
        }
	}