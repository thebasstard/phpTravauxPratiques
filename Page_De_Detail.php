<!DOCTYPE html>
<html>
	<head lang="fr">
		<meta charset="utf-8">
		<head>
			<title>Atelier PHP N°4 - page de détail</title>

			<?php

			require  "connexionBase.php";//inclusion de la bibliotheque de fonctions

			$db = connexionBase();//on appelle la fonction de connexion
			$id = $_GET["id"];
			$str_requete = "SELECT * FROM liens WHERE id = " . $id;

			$result = $db->query($str_requete);

			$lien = $result->fetch(PDO::FETCH_OBJ)
				
			?>
	</head> 
	<body>
		
		<?php
			echo $lien->titre
		?>

		<i>Webmaster

		<?php 
			echo $lien->webmaster 
		?>

		</i>
		<br />

		<?php 
			echo $lien->description 
		?>

		<br />

		<?php 
			echo $lien->url 
		?>

	</body>
</html>