<!doctype html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php
if(isset($_SESSION['user']))
        { ?>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <?php
            if(isset($_SESSION["user"]))
            {
                ?>
                <li><a href="?module=back_office&action=index">Accueil</a></li>
                <li><a href="?module=back_office&action=deconnexion">Deconnexion</a></li>
                 <li><a href="?module=site&action=index">Accès au site</a></li>
                <?php } ?>
        </ul>


    </div>
</nav>

<?php } ?>

