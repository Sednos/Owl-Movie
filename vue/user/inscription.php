<?php 	if(!defined("_BASE_URL")) die("Pirate reconnu !");
include("vue/layout/header.php");
?>
	<div id="formulaireInscription">
		<div class="Wrapper960px">
            <?php
            if(isset($_GET['notif']) && $_GET['notif']=='nok')
            {
                echo 'Login déjà utilisé !';
            }
            ?>
            		<h2>S'inscrire</h2>


                        <form method="post" action="?module=user&action=inscription" id="Formulaire" name="inscription" required>
                        <input id="InputNom" type="text" name="display_name" placeholder=" Nom et prénom" required>
                        <input id="InputMail" type="text" name="email" placeholder=" Email" required>
                        <input id="InputMail" type="text" name="login" placeholder=" Login" required>
                        <input id="InputMail" type="text" pattern="[0-9]{5}" name="code_postal" placeholder=" Code postal" required>
                        <input id="InputMDP" name="pass" type="password" placeholder=" Mot de passe" required>
                        <input type="hidden" name="cle" value="<?php echo md5(uniqid(rand()));?>">
                        <input id="BtnInscription" type="submit" value="S'inscrire">
                        </form>
            
		</div><!--Wrapper960px-->
        
    </div><!--formulaireInscription-->

</form>
<?php include('vue/layout/footer.php'); ?>