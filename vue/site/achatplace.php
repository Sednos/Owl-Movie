<?php include('vue/layout/header.php'); ?>


<div class="achatFilm">

            <div class="filmSeanceWrapper">

                <div class="filmSeanceSsWrapper">

                    <span class="miniBtnRS">
                        <a href="#"><img src="assets/img/picto_Facebook.png" width="15" height="15" alt="Partager sur Facebook"></a>
                        <a href="#"><img src="assets/img/picto_Twitter.png" width="15" height="15" alt="Partager sur Twitter"></a>
                    </span>

                    <h4 class="movieTitle"><span>La planète des singes - les origines</span></h4>

                    <div class="moviePosterWrapper">
                        <img src="assets/img/PhotoSeancePro2.jpg" alt="Titanic">
                    </div>
                    <span class="txReservations">28</span>

                    <p>Réalisateur</p>
                    <p>Acteurs principaux</p>
                    <br>
                    <p>Résumé</p>
                    <p>Date de projection</p>

                    <div class="nbRemainingWrapper nbPlaces">
                        <strong><span class="nbRemaining">42</span> places</strong>restantes
                    </div>
                    <div class="nbRemainingWrapper nbJours">
                        <strong><span class="nbRemaining">18</span> jours</strong>restants
                    </div>

                </div><!--class="filmSeanceSsWrapper"-->

            </div><!--filmSeanceWrapper-->
            
            <div id="cmdPlace">
            
            	<div class="nbePlace">

                <p>
                	Nombre de place
                	<input type="number" step="1" value="1" min="1" max="64"> 
                </p>
                
                </div><!--nbePlace-->   
                    
        
                <div class="Total">
        
                    <p>Total <span> 9,99 €</p>
        
                </div><!--Total-->  
        
        
                <div class="btnAcheter">
        
                    <a href="#" class="BtnStyle BtnColor6">Acheter sa place</a>
                    
                </div><!--btnAcheter-->
            
            </div><!--cmdPlace-->
        
        </div><!--achatFilm-->

<?php include('vue/layout/footer.php'); ?>
