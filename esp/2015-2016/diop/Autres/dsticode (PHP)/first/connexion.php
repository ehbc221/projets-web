<?php
	if(isset($_POST['login'],$_POST['password']) && !empty($_POST['login']) && !empty($_POST['password']))
	{
		session_start();

		$login = $_POST['login'];
		$password = $_POST['password'];

		if ($login == 'root' && $password == "passer") 
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