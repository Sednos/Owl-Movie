<?php include('vue/layout/header.php'); ?>

<div class="achatFilm">

            <div id="eventsProches">
        
                <div class="col1">
                    <div class="moviePosterWrapper">
                        <img src="assets/img/PhotoEvenementPro.jpg" alt="Titanic">
                    </div>
                    <!--<a class="BtnStyle BtnColor7" href="#">Participer</a>-->
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
                    </div><!-- fin de detailsEvent -->
                </div>
                
            </div><!-- fin de eventsProches -->
            
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
        
                    <a href="#" class="BtnStyle BtnColor7">Acheter sa place</a>
                    
                </div><!--btnAcheter-->
            
            </div><!--cmdPlace-->
        
        </div><!--achatFilm-->


<?php include('vue/layout/footer.php'); ?>