<?php
if (isset($_SESSION['user']))
{
    if(isset($_POST['cat_descr']))
    {
        include_once('modele/back_office/ajouter_categorie.php');
        $ajouter = ajouter_categorie($_POST);

        if($ajouter)
        {
            header('location:?action=ajouter_categorie&notif=ok');
        }
        else
        {
            include('vue/probleme.php');
        }
    }
    else {
        include_once('modele/back_office/selection_categories.php');
        $select_categories = selection_categorie();

        if ($select_categories) {
            include('vue/back_office/categorie.php');
        }
        else {
            include('vue/probleme.php');
        }
    }
}
else
{
    echo 'Pirate';
}