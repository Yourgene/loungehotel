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
	<?php foreach ($liste_hebergements as $key => $value) { ?>
		<tr>
			<td><?php echo $value['nom_hebergement'] ?></td>
			<td><?php echo $value['categorie_hebergement'] ?></td>
			<td><?php echo $value['resident_hebergement'] ?></td>
			<td><?php echo $value['adresse_hebergement'] ?></td>
			<td><?php echo $value['prix_hebergement'] ?></td>
			<td><?php echo $value['etoiles_hebergement'] ?></td>
			<td><?php echo $liste_services[$key] ?></th>
			<td><?php echo $value['telephone_hebergement'] ?></td>
		</tr>
	<?php } ?>
	</table>
	<?php }

	?>


</div>