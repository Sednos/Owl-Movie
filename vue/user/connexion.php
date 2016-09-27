<?php 	if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/layout/header.php"); ?>
	<div id="formulaireConnexion">
        
		<div class="Wrapper960px">
            <?php
            if(isset($_GET['notif']) && $_GET['notif']=='nok')
            {
                echo 'Compte non valide, rendez-vous sur vos mail pour le valider';
            }
            ?>
            <h2>Se connecter</h2>

                           <form method="post" action="?module=user&action=connexion" id="Formulaire" name="connexion">
                            <input id="InputMail" name="login" type="text" placeholder=" Login" required>
                            <input id="InputMDP" name="pass" type="password" placeholder=" Mot de passe" required>
                            <input id="BtnInscription" type="submit" value="Se connecter">
                            </form>
            
		</div><!--Wrapper960px-->
        
    </div><!--formulaireConnexion-->
<?php include("vue/layout/footer.php"); ?>