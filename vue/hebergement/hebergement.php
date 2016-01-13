<div>



	
<section class="row">
  <div class="col-lg-offset-1 col-lg-12">
        <h1>Ajout d'un nouvel établissement</h1>
          <form class="form-horizontal" action="hebergement">
            <fieldset>

    <!-- Form Name -->
              <legend>Creation du proprietaire : </legend>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="nom_proprietaire">Nom Proprietaire :</label>  
                <div class="col-md-4">
                <input id="nom_proprietaire" name="nom_proprietaire" type="text" class="form-control input-md">
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="prenom_proprietaire">Prénom proprietaire :</label>  
                <div class="col-md-4">
                <input id="prenom_proprietaire" name="prenom_proprietaire" type="text"  class="form-control input-md">
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="email_proprietaire">Mail proprietaire : </label>  
                <div class="col-md-4">
                <input id="email_proprietaire" name="email_proprietaire" type="text" placeholder="VladLeBeauGossDu69@hotmail.fr" class="form-control input-md">
                  
                </div>
              </div>
               </fieldset>
      </form>
</section>
<section class="row">
  <div class="col-lg-offset-1 col-sm-5">
    <form class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
      <legend>Creation de l'hebergement : </legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nom">Nom :</label>  
        <div class="col-md-4">
        <input id="nom" name="nom" type="text" placeholder="Votre nom" class="form-control input-md">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="adresse">Adresse :</label>  
        <div class="col-md-4">
        <input id="adresse" name="adresse" type="text" placeholder="Votre adresse " class="form-control input-md">
        <span class="help-block">N°rue Rue Département Ville</span>  
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prix">Prix/Nuit :</label>  
        <div class="col-md-4">
        <input id="prix" name="prix" type="text" placeholder="En euros " class="form-control input-md">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="etoile">Nombre d'étoiles :</label>  
        <div class="col-md-4">
        <input id="etoile" name="etoile" type="text" placeholder="5 maximum" class="form-control input-md">
          
        </div>
      </div>
    </fieldset>
    </form>
  </div>

  <div class=" col-sm-5">
    <form class="form-horizontal">
      <fieldset>
        <legend>Suite </legend>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="resident">Destiné aux :</label>
        <div class="col-md-4">
          <select id="resident" name="resident" class="form-control">
            <option value="arbitre">Arbitre</option>
            <option value="equipe">Equipe Sportive</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="categorie">Catégorie :</label>
        <div class="col-md-4">
          <select id="categorie" name="categorie" class="form-control">
            <option value="Hotel">Hôtel</option>
            <option value="Auberge de jeunesse">Auberge de jeunesse</option>
          </select>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="numero_telephone">Numéro de téléphone :</label>  
        <div class="col-md-4">
        <input id="numero_telephone" name="numero_telephone" type="text" placeholder="+33" class="form-control input-md">
        <span class="help-block">ex : 0456789843</span>  
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Chambres a  lits :</label>  
        <div class="col-md-4">
        <input id="textinput" name="textinput" type="text" placeholder="nombre de lits" class="form-control input-md">
          
        </div>
      </div>	

</section>	
<section class="row">
<div class="col-lg-offset-2 col-lg-8">
	 <form class="form-horizontal">
	 	 <fieldset>
			<p> Nombre de places : </p>

			 <div class="form-group">
			<?php 
			for($i=1; $i<11;$i++){ ?>

				<label class="col-md-5 control-label" for="lit_<?php echo ($i) ?>">Chambres à <?php echo ($i) ?> lit : </label>
				<div class="col-md-5">
				<input type="text" value ="0" name="lit_<?php echo ($i) ?>" placeholder="nombre de lits" class="form-control input-md">
				</div>	
			<?php } ?>
			 </div>	
	 		</fieldset>
	    </form>
 </div>
</section>
<section class="row">
<div class="col-lg-offset-2 col-lg-4">
	 <form class="form-horizontal">
	 	 <fieldset>
			<div class="form-group">
			        <label class="col-md-4 control-label" for="checkboxes">Services proposés :</label>
			        <div class="col-md-4">
				        <div class="checkbox">
				        	<?php 
								foreach($liste_services as $service)
								{
								?>
								<label for="checkboxes-0">
									<input type="checkbox" name="<?php echo($service['nom_service']); ?>" value="<?php echo($service['nom_service']); ?>"> <?php echo($service['description_service']); ?><br/>
									- prix : <input type="text" value ="0" name="<?php echo($service['nom_service']); ?>_prix">
									<?php } ?>
								</label>
				          <label for="checkboxes-0">
				            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
				            Eau
				          </label>
				        </div>
			        </div>
			      </div>
			</fieldset>
	    </form>
 </div>

		<!--Services proposés : <br/>
		 affichage de tous les services disponibles grace a une requete sql 
		<?php 
		foreach($liste_services as $service)
		{
		?>
		<input type="checkbox" name="<?php echo($service['nom_service']); ?>" value="<?php echo($service['nom_service']); ?>"> <?php echo($service['description_service']); ?>
		- prix : <input type="text" value ="0" name="<?php echo($service['nom_service']); ?>_prix"><br/>
		<?php } ?>

		<br/>
		<br/>
		<input type="submit" value="Ajouter cet établissement" />
	</form>


		Formulaire ajout nouveau service 

	<form method="post" action="hebergement">
		<input type="HIDDEN" name="action" value="participer_evenement"><br/>

		<h2>Ajouter un service inexistant : </h2>

		<label for="nom_service">Nom : </label>
		<input type="text" name="nom_service"><br/>
		<input type="submit" value="Creer ce service" />-->

	
</section>
<section class="row">
	<div class="col-lg-offset-4 col-lg-3">
	    <form class="form-horizontal">
	      <fieldset>
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="button ajout"></label>
	            <div class="col-md-4">
	              <button type="submit" value="Ajouter cet établissement" id="button ajout" name="button ajout" class="btn btn-primary">Ajouter cet établissement</button>
	            </div>
	          </div>
	      </fieldset>
	    </form>
  	</div>
</section>