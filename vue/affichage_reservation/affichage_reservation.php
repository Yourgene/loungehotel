<div>

	<h1> Reservations de votre hébergement </h1>
	<h2> Etablissement : <?php echo $infos_hebergement['nom_hebergement']?> </h2>

	<?php foreach($liste_reservations as $reservation) { ?>
		<p> 
			ID : <?php echo $reservation['id_reservation'] ?></br>
			Date début : <?php echo $reservation['date_debut'] ?></br>
			Date fin : <?php echo $reservation['date_fin'] ?></br>
			Prix : <?php echo $reservation['prix_reservation'] ?>€</br>
			Nombre de personnes : <?php echo $reservation['nb_personnes'] ?></br>
			Réglé : <?php echo $reservation['paye'];
			if($reservation['paye']=='non'){ ?>
				<a href ='affichage_reservation/facturation/<?php echo $reservation['id_reservation'] ?>'>valier paiement </a>
			<?php } ?></br>

			<a href ='affichage_reservation/suppression/<?php echo $reservation['id_reservation'] ?>'>Supprimmer </a>
		</p>

	<?php } ?>

</div>