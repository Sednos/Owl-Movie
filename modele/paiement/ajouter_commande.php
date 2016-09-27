<?php

function ajouter_commande()
{
    global $connexion;

    $etat = 'En Cour';
    $paiement = 'Paypal';

    try
    {
        $query = $connexion->prepare("INSERT INTO commande (prix, paiement, etat) VALUES (:prix, :paiement, :etat) ");
        $query->bindValue(':prix', $_GET['amt'], PDO::PARAM_INT);
        $query->bindValue(':paiement', $paiement, PDO::PARAM_STR);
        $query->bindValue(':etat', $etat, PDO::PARAM_STR);
        $query->execute();
        var_dump($query);exit;
        return true;
    }
    catch(Exception $e)
    {
        echo $e->getMessage();exit;
        return false;
    }
}