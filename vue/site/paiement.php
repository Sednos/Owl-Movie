<?php include('vue/layout/header.php'); ?>

<div id="formulairePaiementContainer">
    
    <div class="Wrapper960px">
    
      <h2>Mode de paiement</h2>

      <form id="formulaireCB">
        <input type="radio" name="name" value="visa" checked> <img src="assets/img/Visa.png" alt="visa" />
        <input type="radio" name="name" value="mastercard"><img src="assets/img/MasterCard.png" alt="master-card" />
        <input type="radio" name="name" value="visa electron"><img src="assets/img/VisaElectron.png" alt="master-card" />
        <input type="radio" name="name" value="american express"><img src="assets/img/AmericanExpress.png" alt="master-card" />
        <input type="radio" name="name" value="paypal"><img src="assets/img/Paypal.png" alt="master-card" />
      </form>

      <form id="formulairePaiement">

        <h6>Visa</h6>

        <p>* champs obligatoires</p>
        <div class="clear"></div>
        <div>
          <label for="nbr-carte">Numéro *</label>
          <input type="text" id="nbr-carte"><br>
        </div>

        <div>
          <label for="titulaire">Titulaire *</label>
          <input type="text" id="titulaire"><br>
        </div>

        <div class="validite">
          <label for="valide">Validité *</label>
          <input type="month" name="holidays"><br>
        </div>

        <div>
          <label for="cvc">CVC *</label>
          <input type="text" id="cvc">
        </div>

        <div>
          <input type="checkbox" name="name" value="futur" checked>
          <span>Enregistrer ces données pour mes futurs achats.</span>
        </div>

      </form>

    <div class="montantTotal">
      <p class="montant">Montant Total <span class="prix">9,99 €</span>
      </p>    
    </div><!--montantTotal-->      
        
        <div class="boutonPaiement">
          <a href="#" class="BtnStyle BtnColor6">Confirmer mon paiement</a>
        </div><!--boutonPaiement-->
        

    </div><!--Wrapper960px-->

  </div><!--formulairePaiementContainer-->


<?php include('vue/layout/footer.php'); ?>
