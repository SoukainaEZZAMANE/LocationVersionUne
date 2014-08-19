<!Doctype html>
<html>
<head >
	<meta charset="utf-8"/>
	<title>Afficher RESERVATION</title>
	 <link rel="stylesheet" type="text/css" href="css/reservStyle.css" />
</head>

<?php include("header.php");?>
<body>
<div class="container">
	<div  id="conteneur-reserv">
		<h1>Informations Réservation </h1>
		<section id="info">
			<p>
				<?php
				if(isset($_POST['envoyer'])){
					echo 'Départ : '.$_POST['depart'].'<br />';
					echo 'Retour : '.$_POST['retour'].'<br />';
					echo 'Catégorie : '.$_POST['categorie'].'<br />';
					echo 'Km prévu : '.$_POST['nbr_km'].'<br />';
					if(isset($_POST['type']))	echo 'Type de paiment : '.$_POST['type'].'<br />';
				}
				?>
			</p>
		</section>
		</div>
	</div>
	<?php include("aside.php");?>
</div>
</body>
<?php include("footer.php");?>
</html>