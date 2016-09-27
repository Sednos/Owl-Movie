<?php
if(isset($_SESSION['user']))
{
    if(isset($_POST['cat_id'])) {
        include_once('modele/back_office/ajouter_categories.php');
        $ajouter = ajouter_categories($_POST);

        if ($ajouter) {
            header('location:?action=ajouter_categories&id='.$_GET['id']);
        } else {
            include('vue/probleme.php');
        }
    }
    else
    {
        include_once('modele/back_office/selection_categories.php');
        $select_categories = selection_categorie();

        include_once('modele/back_office/selection_categories_film.php');
        $select = selection_categories_film();

        if($select && $select_categories || $select_categories)
        {
            include('vue/back_office/ajouter_categories.php');
        }
        else
        {
            include('vue/probleme.php');
        }
    }
}