<?php
include_once('modele/site/selection_film.php');
$select_film = selection_film();

if($select_film)
{
    if(!isset($_GET['paiement'])) {
        include('vue/paiement/paiementplace.php');
    }
}
else
{
    include('vue/probleme.php');
}