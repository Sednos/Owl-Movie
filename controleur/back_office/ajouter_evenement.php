<?php
if(isset($_SESSION['user']))
{
    if(isset($_POST['titre']))
    {    
        $dossier = "assets/img_evenement";
        include('core/upload/upload.php');
        $result = upload_image($dossier);

        include_once('modele/back_office/ajouter_evenement.php');
        $ajouter = ajouter_evenement($_POST, $result);

        if($ajouter)
        {
            header('location:?notif=ok');
        }
        else
        {
            include('vue/probleme.php');
        }
    }
    else if(!isset($_GET['notif'])=='ok')
    {
        include('vue/back_office/evenement.php');
    }
    else
    {
        header('location:?notif=nok');
    }

}