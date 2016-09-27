<footer id="Footer">

        <?php if(!isset($_SESSION['user']))
{
    ?>
            <br/>
            <p>
            	<a class="InscriptionFooter" href="?module=user&action=inscription">S'inscrire</a>
            </p>

            <p>
				<a href="?module=user&action=connexion" class="Connexion">Déjà un compte ? Connectez-vous</a>
			</p>
    <?php } ?>

             <div id="BtnUp">
             	<img src="assets/img/fleche_remonter.png" alt="Flèche pour remonter">
             </div>

		<div id="BlocsFooter" class="Wrapper960px">

            <div class="BlocFooter">
                <a href="#">Qui sommes-nous ?</a>
                <a href="#">A propos</a>
                <a href="#">CGV</a>
                <a href="#">Mentions légales</a>
                <a href="#">Plan du site</a>
                <a href="#">Nos partenaires</a>
            </div><!--BlocFooter-->

            <div class="BlocFooter">
                <a href="#">Séances en cours</a>
                <a href="#">Comment ça marche ?</a>
                <a href="#">Evènements</a>
            </div><!--BlocFooter-->

            <div class="LastBlocFooter">
                <p>Inscrivez-vous à notre News Letter !</p>

                <form id="NewsLetter">
                <input type="text" placeholder="Votre email ici" name="mailNewsletter" id="mailNewsletter" onclick="reinitChampNewsletter();">
                <button type="submit" name="cmd" value="inscriNewsletter">OK</button>
                </form>

                <p>Contact</p>

                <div id="ReseauxSociaux">
                    <a href="#"><img src="assets/img/facebook.png" width="36"></a>
                    <a href="#"><img src="assets/img/twitter.png" width="36"></a>
                    <a href="#"><img src="assets/img/google_plus.png" width="36"></a>
                </div><!--ReseauxSociaux-->

                <p>28 Place de la Bourse, 75002 Paris</p>
                <p>01 45 56 15 61</p>
            </div><!--LastBlocFooter-->

		</div><!--BlocsFooter-->

    </footer><!--Footer-->



</div><!--Container-->

	<script src="assets/js/jquery.js"></script>
    <script src="assets/js/video.js"></script>
	<script src="assets/js/monscript.js"></script>

<script type="text/javascript">

    // Ressources ayant servi a créé la vidéo Youtube en fond de bloc :

    // https://developers.google.com/youtube/player_parameters?hl=fr
    // http://stackoverflow.com/questions/34696576/youtube-api-autoplay-parameter-doesnt-work
    // http://www.h3xed.com/web-development/how-to-make-a-responsive-100-width-youtube-iframe-embed

    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Replace the 'ytplayer' element with an <iframe> and
    // YouTube player after the API code downloads.
    var player;
    //var played = false;

    function onYouTubePlayerAPIReady() {

        player = new YT.Player('bgVideo', {

            videoId: 'q0o2TtixsIU',
            playerVars: {
                autoplay: 1,
                controls: 0,
                disablekb: 1,
                hl: 'fr-fr',
                loop: 1,
                modestbranding: 0,
                showinfo: 0,
                autohide: 1,
                color: 'white',
                iv_load_policy: 3,
                theme: 'light',
                rel: 0,
                enablejsapi: 1,
                playlist: 'q0o2TtixsIU'
            },
            events: {
                'onReady': onPlayerReady,
            }
        });
    }

    function onPlayerReady(event){
        player.mute();
    }
</script>


</body>

</html>