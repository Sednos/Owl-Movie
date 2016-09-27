<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Owl Movies</title>
<link rel="icon" type="image/png" href="assets/img/logo.png" />
<link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
<link media="screen and (max-width: 1100px)" href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900' rel='stylesheet' type='text/css'>
</head>

<body>

<div id="Container">
    <div class="hamburger">
        <img class="barre" src="assets/img/menu.png">
        <img class="croix" src="assets/img/croix.png">
        <div id="clear"></div>
        <ul>
            <li class="PageActive"><a href="?module=site&action=index">ACCUEIL</a></li>
            <li><a href="?module=site&action=seances">NOS SÉANCES</a></li>
            <li><a href="?module=site&action=evenements">NOS ÉVÈNEMENTS</a></li>
            <li><a href="?module=site&action=vote">PROCHAINES SÉANCES</a></li>
            <li><a href="?module=site&action=aide">COMMENT ÇA MARCHE ?</a></li>
            <li><a href="?module=site&action=contact">CONTACT</a></li>
            <?php
            if(!isset($_SESSION["user"]))
            { ?>
                <li><a href="?module=user&action=inscription">INSCRIPTION</a></li>
                <li><a href="?module=user&action=connexion">CONNEXION</a></li>
            <?php }
            else
            { ?>
                <li><a href="?module=user&action=moncompte">MON COMPTE</a></li>
                <li><a href="?module=user&action=deconnexion">DÉCONNEXION</a></li>
            <?php } ?>
        </ul>
    </div>

	<div id="Bandeau">

		<header id="MainHeader">

			<a class="MainLogo" href="?module=site&action=index"><img src="assets/img/logo.png" width="70" height=""></a>

				<ul id="MainMenuLinks">
                    <li class="PageActive"><a href="?module=site&action=index">ACCUEIL</a></li>
                    <li><a href="?module=site&action=seances">NOS SÉANCES</a></li>
                    <li><a href="?module=site&action=evenements">NOS ÉVÈNEMENTS</a></li>
                    <li><a href="?module=site&action=vote">PROCHAINES SÉANCES</a></li>
                    <li><a href="?module=site&action=aide">COMMENT ÇA MARCHE ?</a></li>
                    <li><a href="?module=site&action=contact">CONTACT</a></li>
                </ul>
            <ul id="LoginLinks">
                <?php
                if(!isset($_SESSION["user"]))
                { ?>
                    <li><a href="?module=user&action=inscription">INSCRIPTION</a></li>
                    <li><a href="?module=user&action=connexion">CONNEXION</a></li>
                <?php }
                else
                { ?>
                    <li><a href="?module=user&action=moncompte">MON COMPTE</a></li>
                    <li><a href="?module=user&action=deconnexion">DÉCONNEXION</a></li>
                <?php } ?>
            </ul>



		</header>