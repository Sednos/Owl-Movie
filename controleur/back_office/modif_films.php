<?php
if(isset($_SESSION['user']))
{
        include('modele/back_office/selection_film.php');
        $select_films = selection_film();

        if(!isset($_GET['id']) && $select_films)
        {
            include('vue/back_office/modif_films.php');
        }
        else if($select_films && isset($_GET['id']))
        {
            include('vue/back_office/modif_film.php');
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