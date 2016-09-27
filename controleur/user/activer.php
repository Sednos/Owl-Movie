<?php

if(isset($_GET['cle']))
{
    include_once('modele/user/activer_compte.php');
    $activation = activation();

    if($activation)
    {
        header('location:?module=site&activer=ok');
    }
    else
    {
        header("Location:?module=site&activer=nok");
    }
}
else
{
    header("loction:?module=site&action=register");
}