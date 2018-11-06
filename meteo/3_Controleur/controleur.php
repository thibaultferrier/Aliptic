<?php
	function getMeteoImage($code){
		//~ Selon la documentation http://openweathermap.org/weather-conditions
		//~ si un "n" est présent dans le nom, c'est qu'il s'agit de la nuit
		//~ on affichera donc toujours la même icone
		if(strpos($code, 'n')){	
			//~ Il fait nuit, donc on affiche toujours une lune
			return 'entypo-moon';
		}

		//~ Correspondance entre code icon de l'API OpenWeatherMap
		//~ et le caractère que l'on va afficher
		$_icones_meteo = array(
			'01d' => 'entypo-light-up',
			'02d' => 'entypo-light-up',
			'03d' => 'entypo-cloud',
			'04d' => 'entypo-cloud',
			'09d' => 'entypo-water', 
			'10d' => 'entypo-water',
			'11d' => 'entypo-flash',
			'13d' => 'entypo-star', 
			'50d' => 'entypo-air'
		);

		if(array_key_exists($code, $_icones_meteo)){
			return $_icones_meteo[$code];
		}else{
			return 'entypo-help';
		}
	}


	//~ Nombre de jours de prévision météo
	$n_jours_previsions = 3;

	//~ Ville dont on affiche la météo
	$ville = "Limoges";
?>