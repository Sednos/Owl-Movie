<?php
    function ajouter_categorie($ajouter)
    {
        global $connexion;

        try
        {
            $query = 'INSERT INTO categorie_film (cat_descr) values (:cat_descr)';
            $q = $connexion->prepare($query);
            $q->bindValue(':cat_descr', $ajouter['cat_descr'], PDO::PARAM_STR);
            $q->execute();
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }

    }