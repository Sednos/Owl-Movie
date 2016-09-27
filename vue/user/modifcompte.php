<?php include('vue/layout/header.inc.php'); ?>

<div id="formulairePreferenceContainer">
  		<div class="Wrapper960px">
          <label for="mdp"><h3>Je modifie mon mot de passe : </h3></label>
          <input name="mdp" id="InputOldMDP" type="text" placeholder="Ancien mot de passe">
          <input class="InputNewMDP" type="password" placeholder="Nouveau mot de passe">
          <input class="InputNewMDP" type="password" placeholder="Confirmer mot de passe">
          <a href="#"><input id="BtnModifMDP" type="submit" value="Modifier mon mot de passe"></a>
        </form>

  		</div><!--Wrapper960px-->

    </div><!--formulairePreferenceContainer-->

<?php include('vue/layout/footer.inc.php'); ?>