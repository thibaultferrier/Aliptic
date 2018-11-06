<?php
//~ Clé API
	//~ Si besoin, vous pouvez générer votre propre clé d'API gratuitement, en créant 
	//~ votre propre compte ici : https://home.openweathermap.org/users/sign_up
	$apikey = "10eb2d60d4f267c79acb4814e95bc7dc";

	//~ URL appelée nous retournant des données au format JSON
	$data_url = 'http://api.openweathermap.org/data/2.5/forecast/daily?APPID='.$apikey.'&q='.$ville.',fr&lang=fr&units=metric&cnt='.$n_jours_previsions;

	//~ On appelle l'URL et on stocke le contenu retourné dans une variable
	$data_contenu = file_get_contents($data_url);
		
	//~ Les données étant au format JSON, on les décode pour les stocker sous la forme d'un tableau associatif
	$_data_array = json_decode($data_contenu, true);

	//~ On répartit nos données dans des variables plus parlantes
	$_ville = $_data_array['city'];
	$_journees_meteo = $_data_array['list'];

	//~ On va parcourir nos journées afin de déterminer pour chacunes le picto météo à afficher
	//~ Twig + MVC = séparer traitements fonctionnels et traitements de mises en forme ;-)
	for ($i = 0; $i < count($_journees_meteo); $i++) {
		//~ On détermine notre valeur
		$_meteo = getMeteoImage($_journees_meteo[$i]['weather'][0]['icon']);
		
		//~ ... et on l'ajoute à notre tableau spécifique aux journées
		$_journees_meteo[$i]['meteo'] = $_meteo;
	}

?>