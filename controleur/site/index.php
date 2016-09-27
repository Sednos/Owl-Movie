<?php

include_once('modele/site/selection_films.php');
$select_films = selection_film();

if($select_films)
{
	include('vue/site/index.php');
}
else
{
	include('vue/probleme.php');
}