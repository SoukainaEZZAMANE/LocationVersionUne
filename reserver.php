<!Doctype html>
<html>
				<head >
					<meta charset="utf-8"/>
					<title>
						RESERVATION
					</title>
					 <link rel="stylesheet" type="text/css" href="css/reservStyle.css" />
				</head>
				<?php include("header.php");?>
				
<body >
<div class="container">
<div  id="conteneur-reserv">
<h1>Informations Réservation </h1>
<section id="info">
	<form method="post" action="afficher_reservation.php" >
		<div>
			<label class="reserve">Départ : </label>
			<input type="text" name="depart" data-provide="typeahead" /> <br>
		</div>
		<div>
			<label class="reserve" >Retour :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="retour" data-provide="typeahead" />  <br>
		</div>
		<div>
			<label  class="reserve">Catégorie :</label>
			<input type="text" name="categorie" data-provide="typeahead" />  <br>
		</div>
		<div>
			<label  class="reserve" >Km prévu :</label>
			<input type="text" name="nbr_km" data-provide="typeahead" />  <br>
		</div><br/><br/><br/><br/><br/>
		<div> 
			<label >Type de paiment:</label><br/><br/><br/>
			<!--select name="age" id="age"-->	
			<!--optgroup label="Age"-->
			<input type="radio" name="type" value="Espèces" /> Espèces <br />
			<input type="radio" name="type"  value="Carte VISA" /> Carte VISA<br />
			<input type="radio" name="type"  value="chèque" /> chèque <br />
			<!--/optgroup-->		
		</div>
		<div>
			<label for="age">L'age de conducteur le jour de début de location :</label>
			<label>+21</label>
		</div><br />
		<div >
			<input type="submit" value="Réserver" name="envoyer" />
			<button type="reset" >Fermer</button>
		</div>
	</form>
</section>
</div>
</div>
<?php include("aside.php");?>
</div>
</body>
<?php include("footer.php");?>
</html>