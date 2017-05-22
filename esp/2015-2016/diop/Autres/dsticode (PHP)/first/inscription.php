<?php
	if(isset($_POST['nom'],$_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['prenom']))
	{
		session_start();
		echo "Bonjour ".$_POST['prenom']." ".$_POST['nom'];
		$_SESSION['nom'] = $_POST['nom'];
		$_SESSION['prenom'] = $_POST['prenom'];
	}
	else
	{
		// echo "Vous n'avez pas accès a cette page";
		header('Location:inscription.html');
	}
?>