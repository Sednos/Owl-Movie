<?php
	if(isset($_SESSION['user']))
	{
		include('modele/user/modifcompte.php');
		$modifcompte = modif_compte();

		if($modifcompte)
		{
			include('vue/user/modifcompte.php');
		}
	}