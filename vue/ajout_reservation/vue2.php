<div>

	<script>
  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>

	<h1>Ajout Réservation - Etape 2 </h1>

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

		<h2> Services désirés </h2>

		<?php 
		foreach($liste_services as $service)
		{
		?>
		<input type="checkbox" name="<?php echo($service['nom_service']); ?>" value="<?php echo($service['nom_service']); ?>"> <?php echo($service['description_service']); ?>
		(<?php echo($service['prix_service']); ?> €)<br/>
		<?php } ?>

		<h2> Durée du séjour </h2>
		<label for="from">Du</label>
		<input type="text" id="from" name="from">

		<label for="to">au</label>
		<input type="text" id="to" name="to">
		<br/>
		<input type="submit" value="Suivant" />
	
	</form>
</div>
