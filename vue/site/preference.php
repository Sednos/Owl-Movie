<?php include('vue/layout/header.php'); ?>

<div id="formulairePreferenceContainer">
  		<div class="Wrapper960px">
        <h2>Mes informations personnelles</h2>

        <form id="FormulairePreference">
          <input id="InputNom" type="text" value="Morgane">
          <input id="InputPrenom" type="text" value="Pelissier" >
          <input id="InputMail" class="raccourci" type="text" value="morgane.pelissier" >
          <input class="InputVerif" type="button" name="name" value="Vérifier">
          <input id="InputTel" class="raccourci" type="text" value="0667395981" >
          <input class="InputVerif" type="button" name="name" value="Vérifier">

          <label for="mdp"><h3>Je modifie mon mot de passe : </h3></label>
          <input name="mdp" id="InputOldMDP" type="text" placeholder="Ancien mot de passe">
          <input class="InputNewMDP" type="password" placeholder="Nouveau mot de passe">
          <input class="InputNewMDP" type="password" placeholder="Confirmer mot de passe">
          <a href="#"><input id="BtnModifMDP" type="submit" value="Modifier mon mot de passe"></a>
        </form>

  		</div><!--Wrapper960px-->

    </div><!--formulairePreferenceContainer-->


<?php include('vue/layout/footer.php'); ?>
