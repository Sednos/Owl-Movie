<?php
function verif_mail()
{
    global $connexion;

    try
    {
        $query = $connexion->prepare('SELECT COUNT(*) FROM om_user WHERE email=:email');
        $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $query->execute();
        if($query->fetchColumn() = 1) {
            return true;
        }else{
            return false;
        }
    }
    catch(Exception $e)
    {
        return false;
    }
}