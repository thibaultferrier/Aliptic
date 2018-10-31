<?php

	//on vérifie que tous les champs soient remplis
	if (empty($_nom) || empty($_prenom) || empty($_email) || empty($_sexe)) {
		$_message_err = 'Remplissez tous les champs!';
		return;
	}

	//vérification du nom
	if (!gettype($_nom) === 'string') {
		$_message_err = 'le nom est incorrect!';	
		return;	
	}
	if (strlen($_nom) < 8 || strlen($_nom) > 32) {
		$_message_err = "Votre nom doit contenir entre 8 et 32 caractères!";
		return;
	}

	//vérification du prenom
	if (!gettype($_prenom) === 'string') {
		$_message_err = 'le prénom est incorrect!';
		return;
	}
	if (strlen($_prenom) < 8 || strlen($_prenom) > 32) {
		$_message_err = "Votre prénom doit contenir entre 8 et 32 caractères!";
		return;
	}

	//vérification de l'adresse email
	if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
		$_message_err = "L'adresse email n'est pas correcte!";
		return;
	}

	//vérification du sexe
	if ($_sexe === '' || !gettype($_sexe) === 'string'){
		$_message_err = "Veuillez renseigner votre sexe!";
		return;
	}