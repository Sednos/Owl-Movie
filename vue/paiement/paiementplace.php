<?php include('vue/layout/header.php'); ?>



  <div id="formulairePaiementContainer">
    
    <div class="Wrapper960px">
    
      <h2>Mode de paiement</h2>

      <form id="formulaireCB">
        <input type="radio" name="name" value="visa" checked> <img src="assets/img/Visa.png" alt="visa" />
        <input type="radio" name="name" value="mastercard"><img src="assets/img/MasterCard.png" alt="master-card" />
        <input type="radio" name="name" value="visa electron"><img src="assets/img/VisaElectron.png" alt="master-card" />
        <input type="radio" name="name" value="american express"><img src="assets/img/AmericanExpress.png" alt="master-card" />
        <input type="radio" id="paypal" name="name" value="paypal"><img src="assets/img/Paypal.png" alt="master-card" />
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

      <p class="montant">Montant Total <span class="prix"><?php foreach($select_film as $select) { echo $select['prix']; } ?> €</span>
      </p>    
    </div><!--montantTotal-->      

        <div class="boutonPaiement">
          <a href="?module=user&action=moncompte&idfilm=<?php echo $_GET['id']; ?>&paiement" class="BtnStyle BtnColor6">Confirmer mon paiement</a>
        </div><!--boutonPaiement-->

      <?php foreach($select_film as $select)
      {
        ?>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypalform">
          <input type="hidden" value="<?php echo $select['prix']; ?>" name="amount" />
          <input name="currency_code" type="hidden" value="EUR" />
          <input name="shipping" type="hidden" value="0.00" />
          <input name="tax" type="hidden" value="0.00" />
          <input name="return" type="hidden" value="?module=user&action=moncompte&paiement=ok" />
          <input name="cancel_return" type="hidden" value="?module=user&action=moncompte&paiement=nok" />
          <input name="notify_url" type="hidden" value="?module=paiement&action=paiement" />
          <input name="cmd" type="hidden" value="_xclick" />
          <input name="business" type="hidden" value="vigachet-facilitator@gmail.com" />
          <input name="item_name" type="hidden" value="<?php echo $select['titre']; ?>" />
          <input name="item_number" type="hidden" value="<?php echo $select['idfilm']; ?>" />
          <input name="no_note" type="hidden" value="1" />
          <input name="lc" type="hidden" value="FR" />
          <input name="bn" type="hidden" value="PP-BuyNowBF" />
          <input name="custom" type="hidden" value="<?php echo $_SESSION['user']['id']; ?>" />
          <input name="tx" type="hidden" value="gMe1f5NOtO9hjjeUVTl8c2Tx_jw_ChlQ-o65dVhRv4P5TZdEdagCft5ervm" />
          <input alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_buynow_LG.gif" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
        </form>
      <?php } ?>


    </div><!--Wrapper960px-->

  </div><!--formulairePaiementContainer-->



<?php include('vue/layout/footer.php'); ?>
