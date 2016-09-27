<?php

function connexion_user($user)
{
    global $connexion;

    try
    {
        $query=$connexion->prepare('SELECT * FROM om_admin WHERE identifiant=:identifiant AND pass=:pass');
        $query->bindValue(':identifiant', $user["identifiant"], PDO::PARAM_STR);
        $query->bindValue(':pass', md5($user["pass"]), PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
        $query->closeCursor();
        return $user;
    }
    catch (Exception $e)
    {
        $query->closeCursor();
        return false;
    }
}