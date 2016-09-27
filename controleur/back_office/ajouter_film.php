<?php
if(isset($_SESSION['user']))
{
    if(isset($_POST['titre']))
    {
        $dossier = "assets/img_film";
        include_once('core/upload/upload.php');
        $result = upload_image($dossier);

        include_once('modele/back_office/ajouter_film.php');
        $ajouter = ajouter_film($_POST, $result);
        $id = $connexion->lastInsertId();

        if(isset($id) && $ajouter)
        {
                header('location:?action=ajouter_categories&id='.$id);
        }
        else
        {
            include('vue/probleme.php');
        }
    }
    else if(!isset($_GET['notif'])=='ok')
    {
            include('vue/back_office/film.php');
    }
    else
    {
        header('location:?notif=nok');
    }

}