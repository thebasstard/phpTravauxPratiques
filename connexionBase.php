<?php
function connexionBase(){
	//paramètre de connexion serveur
	$host="localhost";//connexion locale
	$login="root";//login de connexion par defaut a la base de donnees sous MySQL
	$password="";//password pour s'identifier aupres du serveur par defaut il est vide
	$base="sites";//le nom de la base de donnees utilisee
	try{

		$db = new PDO('mysql:host=' . $host . ';charset=utf8;dbname=' . $base, $login, $password);
		return $db;
	} catch (Exception $e) {
		print 'Erreur : ' .$e->getMessage() . '<br />';
		print 'N° : ' . $e->getCode();
		die("Connexion au serveur impossible, la base de données sites n'est pas accessible.");//si le catch intercepte une erreur, le die arrete l'execution du script
 	}

}
?>