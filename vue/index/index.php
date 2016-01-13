
	
	<?php if(!empty($_SESSION['id'])){ ?>
	<h2>Actions </h2>
		<ul>
			<li><a href= "hebergement">Ajouter un nouvel hebergement</a> </li>
			<li><a href="reservation">Effectuer un réservation </a></li>
			<li><a href="affichage_reservation">Afficher les reservations de mon hebergement </a></li>
		</ul>
		<?php } else {?>
			<p> Bienvenue sur le site de reservation d'hebergement. Recherchez une chambre ou connectez vous </p>
		<?php } ?>
</div>