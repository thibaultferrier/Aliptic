<?php

//on sécurise les informations
$_nom     = htmlspecialchars($_POST["nom"]);
$_email   = htmlspecialchars($_POST["email"]);
$_message = htmlspecialchars($_POST["message"]);



//on vérifie que tous les champs soient remplis
if (empty($_nom) || empty($_email) || empty($_message))
	exit ("Remplissez tous les champs!");



//vérification des types
if (!gettype($_nom) === 'string') {
	exit ("Le nom n'est pas remplis correctement!");
}

if (!gettype($_message) === 'string') {
	exit ("Le message n'est pas du texte!");
}

if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
	exit ("L'adresse email n'est pas correcte!");
}

//vérification de la longueur du nom
if (strlen($_nom) < 8 || strlen($_nom) > 32) {
	exit ("Votre nom doit contenir entre 8 et 32 caractères!");
}

echo 'Bonjour '.$_nom.'<br>';
echo 'Votre adresse email est : '.$_email.'<br>';
echo 'Votre message est : '.$_message.'<br>';

?>
