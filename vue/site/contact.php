<?php include('vue/layout/header.php'); ?>

<div class="Wrapper960px">
    <h2>Contact</h2>

    <div class="infos-pratiques">
      <h4>Le lieu :</h4>
      <p>Palais Brongniart</p>
      <p>28 Place de la Bourse</p>
      <p>75002 Paris</p>

      <h4 class="horaires">Les Horaires :</h4>
      <p>De 9h à 23h du lundi au vendredi.</p>
      <p>De 10h à 1h le samedi.</p>
      <p>De 14h à 18h le dimanche.</p>
      <p></p>
    </div>

    <div class="formulaire-contact">

      <form>
        <input id="InputNom" type="text" placeholder="Votre nom" >
        <input id="InputMail" type="email" placeholder="Votre email" >
        <textarea name="name" rows="8" cols="40" placeholder="Votre question"></textarea>
        <a href="#"><input id="BtnContact" type="submit" value="Envoyer"></a>
      </form>


    </div>

    <div class="clear"></div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.4425706946695!2d2.339048550705062!3d48.86883910782424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c8ab00dff%3A0xc8bb3a66d8ae2daa!2s28+Place+de+la+Bourse%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1454168367963" width="960" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

  </div><!-- Wrapper960px -->



  <!-- <div id="contactContainer">

    <div class="Wrapper960px">

      <h2>Contact</h2>

      <div class="infos-pratiques">

      </div> -->


    </div><!--Wrapper960px-->

  </div><!--formulairePaiementContainer-->



<?php include('vue/layout/footer.php'); ?>