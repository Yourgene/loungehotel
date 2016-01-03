<div>

	<h1>Effectuer une réservation </h1>
	<form method="post" action="reservation/visualiser">

		<h2>Saisissez vos préférences :</h2>

		<label for="client">Vous êtes : </label>
		<select name="client" id="client">
		   <option value="arbitre">Arbitre</option>
		   <option value="equipe">Membre d'équipe sportive</option>
		</select><br/>

		<label for="residence">Vous cherchez : </label>
		<select name="residence" id="residence">
		   	<option value="Hotel">Un Hotel</option>
		   	<option value="Auberge de jeunesse">Une Auberge de jeunesse</option>
		   	<option value="osef">Indifférent</option>
		</select><br/>

		<label for="nb_places">Nombre de personnes : </label>
		<input type="text" name="nb_places"><br/>

		<input type="checkbox" name="chambre_commune" value="chambre_commune"> Chambre commune

		<h2>Vous pouvez réserver une chambre dans le même hébergement que votre collegue/coéquipier. Pour cela, demandez lui son numéro de réservation :</h2>

		<label for="numero_collegue">Numero reservation : </label>
		<input type="text" name="numero_collegue"><br/><br/>

		<input type="submit" value="voir les hébergements disponibles" />
	</form>




</div>