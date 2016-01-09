<?php

	function random_password( $length = 8 ) {
	    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    $password = substr( str_shuffle( $chars ), 0, $length );
	    return $password;
	}
	$mdp = random_password(10);

	$mdp_proprietaire = md5($mdp);
	$b =md5('9rwhVumJl8');
	echo($b);
