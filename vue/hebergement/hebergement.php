<div>
	Ajout d'un nouvel établissement
	<form method="post" action="hebergement">
	 	<input type="HIDDEN" name="action" value="participer_evenement"><br/>


	 	<label for="categorie">Nom : </label>
	 	<input type="text" name="nom"><br/>
	 	<label for="adresse">Adresse : </label>
	 	<input type="adresse" name="adresse"><br/>

	 	<label for="prix">Prix : </label>
	 	<input type="prix" name="prix"><br/>

		<label for="categorie">Catégorie : </label>
	   	<select name="categorie" id="categorie">
	       <option value="Hotel">hotel</option>
	       <option value="Auberge de jeunesse">Auberge de jeunesse</option>
	   	</select><br/><br/>

	   	Nombre de places : <br/>

	   	<label for="lit_1">Chambres à 1 lit : </label>
	 	<input type="lit_1" name="lit_1"><br/>

	 	<label for="lit_2">Chambres à 2 lit : </label>
	 	<input type="lit_2" name="lit_2"><br/>

	 	<label for="lit_3">Chambres à 3 lit : </label>
	 	<input type="lit_3" name="lit_3"><br/>

	 	<label for="lit_4">Chambres à 4 lit : </label>
	 	<input type="lit_4" name="lit_4"><br/>

	 	<label for="lit_5">Chambres à 5 lit : </label>
	 	<input type="lit_5" name="lit_5"><br/>

	 	<label for="lit_6">Chambres à 6 lit : </label>
	 	<input type="lit_6" name="lit_6"><br/>

	 	<label for="lit_7">Chambres à 7 lit : </label>
	 	<input type="lit_7" name="lit_7"><br/>

	 	<label for="lit_8">Chambres à 8 lit : </label>
	 	<input type="lit_8" name="lit_8"><br/>

	 	<label for="lit_9">Chambres à 9 lit : </label>
	 	<input type="lit_9" name="lit_9"><br/>

	 	<label for="lit_10">Chambres à 10 lit : </label>
	 	<input type="lit_10" name="lit_10"><br/><br/>

	 	Services proposés : <br/>

	 	<input type="checkbox" name="dejeuner" value="1"> petit dejeuner
		<input type="checkbox" name="sauna" value="2"> sauna
		<input type="checkbox" name="billard" value="3"> billard
		<br/>
		<br/>
		
		<input type="submit" value="Ajouter cet établissement" />
		</form>
