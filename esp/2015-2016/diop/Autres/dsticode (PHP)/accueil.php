<?php
	session_start();
	if (isset($_SESSION['nom'], $_SESSION['prenom'])) 
	{
		echo "Bienvenue ".$_SESSION['prenom'].' '.$_SESSION['nom'];
		session_destroy();
	}
	else
	{
		echo "You don't have access on this page :)";
	}
?>