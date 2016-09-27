<?php
if(isset($_SESSION['user']))
{
    include_once('modele/back_office/delete_categorie.php');
    $delete = delete_categorie();

    if($delete)
    {
        header('location:?action=ajouter_categorie');
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