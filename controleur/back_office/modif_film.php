<?php
if(isset($_SESSION['user']))
{
    $dossier = "assets/img_film";
    include_once('core/upload/upload.php');
    $result = upload_image($dossier);

    include_once('modele/back_office/modif_film.php');
    $retour = modif_film($_POST, $result);

    if($retour)
    {
        header('location:?action=modif_film_categorie&id='.$_GET['id']);
    }
    else
    {
        include('vue/probleme.php');
    }
}