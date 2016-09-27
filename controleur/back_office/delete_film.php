<?php
    if(isset($_SESSION['user']))
    {
        include_once('modele/back_office/delete_film_cat.php');
        $delete = delete_film_cat();

        include_once('modele/back_office/delete_film.php');
        $delete1 = delete_film();

        if($delete && $delete1)
        {
            header('location:?action=modif_films');
        }
        else
        {
            include('vue/probleme.php');
        }
    }