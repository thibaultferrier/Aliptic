<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Météo</title>
	<link rel="stylesheet" href="./2_Vue/css/import.css" />
	<link rel="stylesheet" href="./2_Vue/css/reset.css" />
	<style>
		/** CSS général **/
		[class*="entypo-"]:before{font-family:'entypo',sans-serif}
		[class*="fontawesome-"]:before{font-family:'FontAwesome',sans-serif}
		.wrapper{width:600px;height:480px;margin:5% auto;background-color:#1F222A;border-radius:7px}
		body{color:#eee;font-family:'Open Sans',sans-serif;background-color:#E0E1E3}
		section{height:100%;box-sizing:border-box;max-width:480px;padding:10px 30px;float:left;position:relative;background-color:#1F222A;border-radius:7px;overflow:hidden}
		section.bordure{width:120px;height:100%;float:left;background-color:#373B46;border-radius:7px}
		section.bordure p{bottom: 0;color: #eee;font-size: 2.2em;font-weight: bold;line-height: 55px;position: absolute;text-align: left;text-decoration: none;text-transform: uppercase;transform: rotate(-90deg);transform-origin: 0 0 0;transition: font-size 0.2s ease 0s;}
		section.bordure p:hover{font-size:2.6em;}
		section.contenu h1{width:400px;padding:20px 0 35px;position:relative;font-size:1.5em;border-bottom:2px solid #4b4e57}
		section.contenu h1 a.lk{width:50px;height:50px;position:absolute;top:10px;right:0;color:#4b4e57;font-size:1.4em;text-align:center;line-height:45px;text-decoration:none;background-color:#000;border-radius:3px;transition:color .5s}
		section.contenu h1 a.lk:hover{color:#eee}
		section.contenu .numero_jour{text-align:right;margin-top:10px;font-style:italic}
		section.contenu .temperature{padding:40px 0;color:#3D414C;font-size:5em;transition:color .5s ease}
		section.contenu .temperature:hover{color:#ff0}
		section.contenu .temperature.entypo-cloud:hover{color:#C6C6C4}
		section.contenu .temperature.entypo-water:hover{color:#377ECE}
		section.contenu .temperature.entypo-air:hover{color:#C68ACE}
		section.contenu .temperature.entypo-cloud:hover,section.contenu .temperature.entypo-help:hover,section.contenu .temperature.entypo-moon:hover{color:#fff}
		section.contenu .temperature h2{display:inline;color:#eee;font-weight:300}
		section.contenu .temperature h2 span.degree-symbol{display:inline-block;margin:0 15px;font-size:.6em;vertical-align:top}
		section.contenu .temperature h2 span.celcius{display:inline-block;margin:10px 0 0 15px;color:#3D414C;font-size:.3em;vertical-align:top}
		section.contenu .description{margin-bottom: 10px;}
		section.contenu ul{padding:5px;margin-bottom:70px}
		section.contenu ul li{display:block;float:left;margin-right:30px;color:#3D414C;font-size:2em}
		section.contenu ul li:last-child{margin-right:0}
		section.contenu ul li span{padding-left:10px;color:#eee;font-size:.6em;line-height:30px;vertical-align:top}
		section.contenu .bullets{height:70px;color:#3D414C;text-align:center}
		section.contenu .bullets span{margin-right:10px;font-size:.6em;cursor:pointer}
		section.contenu .bullets span.active{color:#eee;font-size:.8em}
		section.contenu a{color:#60646e;font-size:1.2em;text-decoration:none;transition:color .5s}
		section.contenu a:hover{color:#eee}
		</style>
</head>
<body>
	<div class="wrapper">
		<section class="bordure">
		    <p>Météo</p>
		</section>

		<section class="contenu">
		    <h1>
		    	<?php
		    		echo ucfirst($_ville['name']).', '.strtoupper($_ville['country']);
		    	?>
		    <a href="http://maps.google.com/maps?q=<?php echo $_ville['coord']['lat'].','.$_ville['coord']['lon'];?>" class="lk fontawesome-screenshot" target="_blank"></a>
		    </h1>
		    <?php foreach($_journees_meteo as $journee){ ?>
		    	<div class="jour">
		    		<div class="numero_jour">
		    			<h2>Météo du <?php echo date('d/m/Y', $journee['dt']);?></h2>
		    		</div>

				    <div class="temperature {{journee.meteo}}">
				      <h2><?php echo $journee['temp']['day'];?><span class="degree-symbol">°</span>C</h2>
				    </div>

				    <ul>
				      <li class="fontawesome-leaf left">
				        <span><?php echo $journee['speed'];?> km/h</span>
				      </li>
				      <li class="fontawesome-tint center">
				        <span><?php echo $journee['humidity'];?>%</span>
				      </li>
				      <li class="fontawesome-dashboard right">
				        <span><?php echo $journee['pressure'];?></span>
				      </li>
				    </ul> 
				    <div class="description">
				    	Description : <?php echo ucfirst($journee['weather'][0]['description']);?>
				    </div>
				</div>
		    <?php } ?>

		    <div class="bullets">
		    	<?php
		    		for($i = 0; $i < $n_jours_previsions; $i++){
		    			echo '<span class="entypo-record" data-cible="'.$i.'"></span>';
		    		}
		    	?>
		    </div>

		</section>
	</div>
	<script src='./2_Vue/jquery/jquery.min.js'></script>
	
	<script src="./2_Vue/js/meteo.js"></script>
</body>
</html>