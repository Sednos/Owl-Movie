<?php
if(isset($_SESSION['user']))
{

    include_once('modele/back_office/delete_evenement.php');
    $delete = delete_evenement();

    if($delete)
    {
        header('location:?action=modif_evenements');
    }
    else
    {
        include('vue/probleme.php');
    }
}