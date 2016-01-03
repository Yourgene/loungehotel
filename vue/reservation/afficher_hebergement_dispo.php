<div>
	<h1>Liste des Hebergements correspondant à votre recherche </h1>
	Pour effectuer un réservation, contactez l'établissement qui vous intéresse par téléphone.

	<?php 
	if(empty($liste_hebergements)){ ?>

	<p> Il n'y a malheuresement aucun établissement correspondant à votre recherche </p>

	<?php 
	}  else { ?>
	<table border="1">
		<tr>
			<th>Nom </th>
			<th>Catégorie</th>
			<th>Destiné à</th>
			<th>Adresse</th>
			<th>Prix/Nuit</th>
			<th>Etoiles</th>
			<th>Services proposés</th>
			<th>TELEPHONE</th>
		</tr>
	<?php foreach ($liste_hebergements as $hebergement) { ?>
		<tr>
			<td><?php echo $hebergement['nom_hebergement'] ?></td>
			<td><?php echo $hebergement['categorie_hebergement'] ?></td>
			<td><?php echo $hebergement['resident_hebergement'] ?></td>
			<td><?php echo $hebergement['adresse_hebergement'] ?></td>
			<td><?php echo $hebergement['prix_hebergement'] ?></td>
			<td><?php echo $hebergement['etoiles_hebergement'] ?></td>
			<td>A FAIRE</th>
			<td><?php echo $hebergement['telephone_hebergement'] ?></td>
		</tr>
	<?php } ?>
	</table>
	<?php }

	?>


</div>