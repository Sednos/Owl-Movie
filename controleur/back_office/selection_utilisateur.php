<?php
if(isset($_SESSION['user']))
{
    include_once('modele/back_office/selection_utilisateur.php');
    $utilisateurs = selection_utilisateur();

    if($utilisateurs)
    {
        include('vue/back_office/utilisateur.php');
    }
    else
    {
        include('vue/probleme.php');
    }
}