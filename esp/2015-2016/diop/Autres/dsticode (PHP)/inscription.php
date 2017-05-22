<?php
	echo "Salut : ".md5("Salut");die();
	if(isset($_POST['login'],$_POST['password']) && !empty($_POST['login']) && !empty($_POST['password']))
	{
		session_start();
		$aEcrire = $_POST['login'].'|'.$_POST['password']."\r\n";
		$fichier = fopen('authentification.txt', 'a');
		fputs($fichier, $aEcrire);
		fclose($fichier);

		echo "Inscription effectuée avec succès ";
	}
	else
	{
		// echo "Vous n'avez pas accès a cette page";
		header('Location:inscription.html');
	}
?>