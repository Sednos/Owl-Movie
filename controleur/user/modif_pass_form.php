<?php
	if(isset($_SESSION['user']))
	{
		include('modele/user/modifpas.php');
		$modifpass = modif_pass();

		if($modifpass)
		{
			include('vue/user/modif_pass_form.php');
		}
	}