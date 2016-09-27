<?php
if(isset($_SESSION['user']))
{
    include_once('modele/back_office/delete_film_cat.php');
    $delete = delete_film_cat();

    if($delete)
    {
        header('location:?action=modif_film_categorie&id='.$_GET['id'].'&delete=ok');
    }
    else
    {
        include('vue/probleme.php');
    }
}