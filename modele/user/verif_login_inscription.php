<?php
function verif_login()
{
    global $connexion;

    try
    {
        $query = $connexion->prepare('SELECT COUNT(*) FROM om_user WHERE login=:login');
        $query->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
        $query->execute();
        if($query->fetchColumn() > 0) {
            return false;
        }else{
            return true;
        }
    }
    catch(Exception $e)
    {
        return false;
    }
}