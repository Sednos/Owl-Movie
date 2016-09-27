<?php
if (!isset($_POST["identifiant"]) && !isset($_POST["pass"]))
{
    if(!isset($_SESSION["user"]))
    {
        include_once('vue/back_office/index.php');
    }
    else
    {
        header("Location:");
    }
}
else
{
    include_once('modele/back_office/connexion_user.php');
    $user = connexion_user($_POST);
    if($user)
    {
        $_SESSION["user"]=$user;
        if(isset($_SESSION["user"]))
        {
            header('Location: ?module=back_office&connexion=ok');
        }
        else
        {
            header('Location: ?module=back_office&notif=nok');
        }
    }
    else
    {
        header("Location:?module=back_office&action=connexion&notif=nok");
    }

}