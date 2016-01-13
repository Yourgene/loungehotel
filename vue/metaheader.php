<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "utf-8" />
		<title>Gestion Hotel</title>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  		<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
        <base href="http://localhost/loungehotel/">
        <link href="localhost/loungehotel/css/bootstrap/dist/css/csstest.css" rel="stylesheet">
        <link href="localhost/loungehotel/css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	</head>

<!--Bandeau de navigation -->
<div class="row">
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="#">Accueil</a> </li>
        <?php if (isset($_SESSION['id']) /*&& $_SESSION['id'] != '1'*/){ ?>
		<li><a href="ajout_reservation">Nouvelle réservation</a></li>
		<?php } else {?>
		<li><a href="reservation">Effectuez une réservation</a></li>
		<?php } ?>
        <?php if (isset($_SESSION['id']) && $_SESSION['id'] == '1'){ ?>
		<li><a href="hebergement">Nouvel Hebergement</a></li>
		<?php } ?>
		<?php if (!isset($_SESSION['id'])){ ?>
		<li><a href="connexion">Espace Organisateurs</a></li>
		<?php } else { ?>
		<li><a href="connexion/off">Deconnexion</a></li>
		<?php } ?>
        </ul>
    </div>
</nav>
</div>
<div class="row">
 <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="#">Accueil</a> </li>
            <li> <a href="#">Nouvelle Réservation</a> </li>
            <li> <a href="#">Nouvel Hébergement</a> </li>
            <li> <a href="#">Connexion</a> </li>
          </ul>
        </div>
      </nav>

</div>


<body>