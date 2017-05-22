<?php
	$host = 'localhost';
	$user = 'dsti_user';
	$password = 'passons';
	$database = 'gescontentio';

	$login = 'djaba';
	$pass = 'passer';
	$authentifie = false;

	$connexion = mysql_connect($host, $user, $password) or die("Erreur de connexion au serveur de base de données");
	mysql_select_db($database) or die('Erreur de selection de la base de données');
	$result = mysql_query('SELECT id, nom, prenom, login, password FROM utilisateur');
	while ($donnees = mysql_fetch_array($result)) 
	{
		// echo "Utilisateur N°".$donnees['id'].'<br>';
		// echo "Nom : ".$donnees['nom'].'<br>';
		// echo "Prenom : ".$donnees['prenom'].'<br>';
		// echo "Login : ".$donnees['login'].'<br>';
		// echo "Password : ".$donnees['password'].'<br><br>';

		if($donnees['login'] == $login && $donnees['password'] == md5($pass))
		{
			$authentifie = true;
			break;
		}
	}

	if ($authentifie) {
		echo "Connexion effectuée avec succès :)";
	}
	else
	{
		echo "Erreur d'authentification";
	}
?>