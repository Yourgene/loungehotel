<div>

	<h1>Ajout Réservation - Etape 3 </h1>

	<form method="post" action="ajout_reservation">

		<input type="hidden" name="action" value="vue2">

		<?php for ($i=1;$i<=$_SESSION['nb_places'];$i++){ ?>

			<h2>Logé n°<?php echo $i; ?> </h2>
			<label for="nom_<?php echo $i; ?>">Nom : </label>
			<input type="text" name="nom_<?php echo $i; ?>"><br/>

			<label for="prenom_<?php echo $i; ?>">Prenom : </label>
			<input type="text" name="prenom_<?php echo $i; ?>"><br/>

			<label for="email_<?php echo $i; ?>">Email : </label>
			<input type="text" name="email_<?php echo $i; ?>"><br/>


		<?php } ?>

		<br/>

		<input type="submit" value="Suivant" />
	
	</form>
</div>