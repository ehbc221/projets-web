<?php
	session_start();
	if (isset($_SESSION['login'], $_SESSION['password'])) 
	{
		echo "Bienvenue ".$_SESSION['login']. " dans la page de présentation";
		echo "<a href='logout.php'>Deconnexion</a>";
	}
	else
	{
		echo "You don't have access on this presentation page :)";
		echo "<meta http-equiv='refresh' content='2;connexion.html'>";
	}
?>