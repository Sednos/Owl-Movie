<?php include('vue/layout/header.php'); ?>



    <div id="formulairePreferenceContainer">
  		<div class="Wrapper960px">
            <?php
            if(isset($_GET['notif']) && $_GET['notif']=='nok')
            {
                echo 'Login déjà utilisé !';
            }
            ?>

            <h2>Mes informations personnelles</h2>

        <form id="FormulairePreference" action="?module=user&action=moncompte&modif&id=<?php echo $_SESSION['user']['id']; ?>" method="post" name="modifcompte">
          <input type="text" id="InputNom" name="display_name" value="<?php echo $compte['display_name'] ?>" required><br/>
          <input type="text" id="InputNom" name="email" value="<?php echo $compte['email'] ?>"  required><br/>
          <input type="text" id="InputNom" name="login" value="<?php echo $compte['login'] ?>"  required><br/>
          <input type="nombre" id="InputNom" name="code_postal" value="<?php echo $compte['code_postal'] ?>"  required><br/>
            <input id="BtnInscription" type="submit" value="Envoyer la modification">
        </form>
        <a href="?module=user&action=modifpass">Modifier mon mot de passe</a>

  		</div><!--Wrapper960px-->

    </div><!--formulairePreferenceContainer-->

<?php include('vue/layout/footer.php'); ?>



    