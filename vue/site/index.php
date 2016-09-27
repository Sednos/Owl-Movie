<?php include('vue/layout/header.php'); ?>

				<div class="BlocVideo">

                    <!--<video autoplay loop>
                        <source  src="./MEDIAS/x.mp4"  type="video/mp4">
                        <source  src="./MEDIAS/x.webm"  type="video/webm">
                        <source  src="./MEDIAS/x.theora.ogv"  type="video/ogg">
                    </video>-->
                    
                    <div id="wrapperBgVideo">
                    	<div id="bgVideo" ></div>
                    </div>
                    
                    <!-- uniquement sur mobile via media queries -->
                    <div id="wrapperBgassets/img">
                    	<img src="assets/img/pirate_des_caraibes.jpg" alt="Image d'illustration Pirates des Caraïbes">
                    </div>

                    <div id="ContaintBandeau">

						<div class="Wrapper960px">

                                <div id="TextDansVideo">
                                	<h1>C'est chouette d'avoir le choix !</h1>
                                    <p class="IntroDescription">Plus de vieux films au cinéma ? C'est faux ! Owl Movies vous invite à voter<br>
                                    pour le film de votre choix et à venir le voir dans notre salle de cinéma !</p>
                                    <?php if(!isset($_SESSION['user']))
                                    { ?>
                                        <a href="#" class="BtnInscription">Inscrivez-vous</a><br>
                                        <a href="#" class="Connexion">Déjà un compte ? Connectez-vous</a>
                                    <?php } ?>
                                </div><!--TextDansVideo-->

						</div><!--Wrapper960px-->

                    </div><!--ContaintBandeau-->

				</div><!--BlocVideo-->

	</div><!--Bandeau-->



	<!--<div id="SectionExplications" class="Wrapper960px">

		<h2>Petites explications...</h2>

            <ul>
            	<li>
                	<span class="NumExplication">1</span>
                    <p>Inscription.</p>
                </li>
            	<li>
                	<span class="NumExplication">2</span>
                    <p>Recherche dans notre grosse base de données remplie de films trop chouettes !</p>
                </li>
            	<li>
                	<span class="NumExplication">3</span>
                    <p>Vote.</p>
                </li>
            	<li>
                	<span class="NumExplication">4</span>
                    <p>Paiement.</p>
                </li>
            	<li>
                	<span class="NumExplication">5</span>
                    <p>Résultats de votre recherche par email et / ou notiication. OK avec séance programmée et KO remboursement.</p>
                </li>
            </ul>

            <a href="#" class="BtnStyle BtnColor1">Voir plus de détails</a>

	</div><!--PetitesExplications-->



	<div id="SectionSeancesPro" class="Wrapper960px">

        <h2>Nos prochaines séances</h2>

        <?php foreach($select_films as $select_film) { ?>

            <div class="filmSeanceWrapper" >

                <div class="filmSeanceSsWrapper" >

                    <span class="miniBtnRS" >
                        <a href = "#" ><img src = "assets/img/picto_facebook.png" width = "15" height = "15" alt = "Partager sur Facebook" ></a >
                        <a href = "#" ><img src = "assets/img/picto_twitter.png" width = "15" height = "15" alt = "Partager sur Twitter" ></a >
                    </span >

                    <h4 class="movieTitle" ><span > <?php echo $select_film['titre']; ?></span ></h4 >

                    <div class="moviePosterWrapper" >
                        <img src="<?php echo $select_film['affiche']; ?>" alt="Titanic" >
                    </div >
                    <span class="txReservations" ><?php $nombre = 200-$select_film['place']; echo 'Vote : '.$nombre; ?></span >

                    <p><?php echo $select_film['realisateur']; ?></p >
                    <p><?php echo $select_film['acteur']; ?></p >
                    <br/>
                    <p class="resume"><?php echo $select_film['resume']; ?></p >
                    <p><?php echo $select_film['date_fin']; ?></p >

                    <div class="nbRemainingWrapper nbPlaces" >
                        <strong ><span class="nbRemaining" > <?php echo $select_film['place']; ?></span > places</strong > restantes
                    </div >
                    <div class="nbRemainingWrapper nbJours" >
                        <strong ><span class="nbRemaining" >
                                <?php
                                $now   = time();
                                $date2 = strtotime($select_film['date_fin']);

                                $diff = abs($now - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
                                $retour = array();

                                $tmp = $diff;
                                $retour['second'] = $tmp % 60;

                                $tmp = floor( ($tmp - $retour['second']) /60 );
                                $retour['minute'] = $tmp % 60;

                                $tmp = floor( ($tmp - $retour['minute'])/60 );
                                $retour['hour'] = $tmp % 24;

                                $tmp = floor( ($tmp - $retour['hour'])  /24 );
                                $retour['day'] = $tmp;
                                if($tmp != 0)
                                {
                                    echo $tmp.'</span > jour(s)</strong > restant(s)';
                                }
                                else
                                {
                                    echo 'Terminé';
                                }
                                ?>

                    </div >

                </div ><!--class="filmSeanceSsWrapper"-->
    <?php if(isset($_SESSION['user']))
    { ?>
                <a href = "?module=paiement&action=paiement&id=<?php echo $select_film['idfilm']; ?>" class="BtnStyle BtnColor6" > Acheter sa place </a >
    <?php } ?>
            </div ><!--class="filmSeanceWrapper"-->

        <?php } ?>

    </div><!--SectionSeancesPro-->



    <div id="SectionEvenementPro" class="Wrapper960px">

        <h2>Notre prochain évènement</h2>

            <div id="eventsProches">
        
            <div class="col1">
                <div class="moviePosterWrapper">
                    <img src="assets/img/PhotoEvenementPro.jpg" alt="Titanic">
                </div>
                <a class="BtnStyle BtnColor7" href="#">Participer</a>
            </div>
            
            <div class="col2">
                <p class="TitreEvenementPro">La nuit 24 heures chrono : toute la saison 3 !</p>
                <p class="DescriptionEvenementPro">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores. 
                </p>
                <div class="detailsEvent">
                    <div class="adresseEvent">
                        85 rue Félix<br>
                        92 700<br>
                        Colombes
                    </div>
                    <div class="prixEvent">
                        <span class="prix">12</span><br>
                        euros
                    </div>
                    <div class="delaiEvent">
                        <span class="delai">4</span><br>
                        jours restants
                    </div>
                </div><!--detailsEvent-->
            </div><!--col2-->
            
        </div><!--eventsProches-->

    <a class="btnVoirPlus plusDEvenements" href="#"><span class="symbolPlus">+</span>Voir plus d'événements</a>
    
    </div><!--SectionEvenementPro-->



    <div id="SectionPlusDemandes">

        <h2 class="SectionPlusDemandes">Les films les plus demandés</h2>
            <h3>Votez pour le film que vous souhaitez redécouvrir au cinéma.</h3>
            
            <p class="descri">
                Owl Movie vous laisse le choix : Exprimer vous sur nos réseaux sociaux puis
                <br>
                après notre chouette sélection des films les plus demandés voter sur notre site !
            </p>
            
            <div class="sousMenu">
                <a class="itemSsMenu linkExprimer" href="#"><span class="symbolFacebook"><img src="assets/img/facebookavis.png" alt="Facebook"></span>Exprimez-vous !</a>
                <a class="itemSsMenu linkVoter2" href="#">Voter pour votre film</a>
            </div> 

    </div><!--SectionPlusDemandes-->



    <div id="SectionSearch" class="Wrapper960px">

    	<h2 class="SectionSearch">A la poursuite de votre film...</h2>

        	<h3>Vérifiez que votre film préféré fait partie de notre chouette base de données !</h3>

    			<!--<form id="Formulaire">
                	<input id="InputNom" type="text" >
                    	<a href="#"><input id="BtnOK" type="submit" value="GO !"></a>
				</form>-->


    <form id="SearchFilm">
        <input id="InputSearch" type="text" placeholder="Titre de votre film">
        <input id="BtnOK" type="submit" value="GO !">
    </form>

    </div><!--SectionSearch-->


<?php include('vue/layout/footer.php'); ?>