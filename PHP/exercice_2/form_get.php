<?php


//on sécurise les informations
$_annee       = htmlspecialchars($_GET["annee"]);
$_code_postal = htmlspecialchars($_GET["code_postal"]);
$_objet       = htmlspecialchars($_GET["objet"]);




//on vérifie que tous les champs soient remplis
if (empty($_annee) || empty($_code_postal) || empty($_objet))
	exit ("Remplissez tous les champs!");



//vérification des types
if (!gettype($_annee) == 'string') {
	exit ("L'année n'est pas remplie correctement!");
}
if (!gettype($_code_postal) == 'string') {
	exit ("Le code postal n'est pas rempli correctement!");
}
if (!gettype($_objet) == 'string') {
	exit ("L'objet' n'est pas rempli correctement!");
}


//vérification de taille
if (strlen($_annee) != 4) {
	exit ("L'année doit contenir 4 chiffres!");
}
if (strlen($_code_postal) != 5) {
	exit ("Le code postal doit contenir 5 chiffres!");
}



//sortie
echo "Vous êtes né(e) en : ".$_annee.'<br>';
echo "Votre code postal est : ".$_code_postal.'<br>';
echo "L'objet de votre requête est : ".$_objet;


?>