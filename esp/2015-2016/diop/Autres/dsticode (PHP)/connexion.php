<?php
	if(isset($_POST['login'],$_POST['password']) && !empty($_POST['login']) && !empty($_POST['password']))
	{
		session_start();

		$login = $_POST['login'];
		$password = $_POST['password'];

		$authentifie = false;
		$fichier = fopen('authentification.txt', 'r');
		while (!feof($fichier))
		{
			$contenu = fgets($fichier);
			if (trim($contenu) == $login.'|'.$password)
			{
				$authentifie = true;
				break;
			}
		}
		fclose($fichier);
		// $contenu = file_get_contents('authentification.txt');

		if ($authentifie) 
		{
			echo "Bonjour ".$_POST['login'].", authentification réussie !";
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['password'] = $_POST['password'];
		}
		else
		{
			echo "Erreur d'authentification, login ou mot de passe incorrect !";
		}
	}
	else
	{
		// echo "Vous n'avez pas accès a cette page";
		header('Location:connexion.html');
	}
?>