<?php
    if(isset($_SESSION['user']))
    {
        include_once('modele/back_office/delete_user.php');
        $delete = delete_user();

        if($delete)
        {
            header('location:?action=selection_utilisateur');
        }
        else
        {
            include('vue/probleme.php');
        }
    }