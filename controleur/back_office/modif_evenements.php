<?php
if(isset($_SESSION['user']))
{
    include('modele/back_office/selection_evenement.php');
    $select_evenements = selection_evenement();

    if(!isset($_GET['id']) && $select_evenements && !isset($_GET['modif']))
    {
        include('vue/back_office/modif_evenements.php');
    }
    else if($select_evenements && isset($_GET['id']) && !isset($_GET['modif']))
    {
        include('vue/back_office/modif_evenement.php');
    }
    else if($select_evenements && isset($_GET['modif']))
    {
        $dossier = "assets/img_evenement";
        include_once('core/upload/upload.php');
        $result = upload_image($dossier);

        include_once('modele/back_office/modif_evenement.php');
        $modif = modif_evenement($_POST, $result);

        if($modif)
        {
            header('location:?modif=ok');
        }
        else
        {
            include('vue/probleme.php');
        }
    }
    else
    {
        include('vue/probleme.php');
    }
}
else
{
    echo 'Pirate';
}