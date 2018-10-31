<!DOCTYPE html>
<html>
<head>
	<title>Période 3 - Semaine 1</title>
	<meta charset="utf-8">
	<style>
		@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);*{margin:0;padding:0;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-webkit-font-smoothing:antialiased;-moz-font-smoothing:antialiased;-o-font-smoothing:antialiased;font-smoothing:antialiased;text-rendering:optimizeLegibility}body{font-family:Roboto,Helvetica,Arial,sans-serif;font-weight:100;font-size:12px;line-height:30px;color:#777;background:#4CAF50}.container{max-width:800px;width:100%;margin:0 auto;position:relative}.contact button[type=submit],.contact input[type=text],.contact input[type=email],.contact input[type=tel],.contact input[type=url],.contact select{width:100%;}.contact textarea{font:400 12px/16px Roboto,Helvetica,Arial,sans-serif}.contact{background:#F9F9F9;padding:20px;margin:20px 0;box-shadow:0 0 20px 0 rgba(0,0,0,.2),0 5px 5px 0 rgba(0,0,0,.24)} h3{display:block;font-size:30px;font-weight:300;margin-bottom:10px}.contact h4{margin:5px 0 15px;display:block;font-size:13px;font-weight:400}fieldset{border:none!important;margin:0 0 10px;min-width:100%;padding:0;width:100%}.contact input[type=text],.contact input[type=email],.contact input[type=tel],.contact input[type=url],.contact textarea{width:100%;border:1px solid #ccc;background:#FFF;margin:0 0 5px;padding:10px}.contact input[type=text]:hover,.contact input[type=email]:hover,.contact input[type=tel]:hover,.contact input[type=url]:hover,.contact textarea:hover{-webkit-transition:border-color .3s ease-in-out;-moz-transition:border-color .3s ease-in-out;transition:border-color .3s ease-in-out;border:1px solid #aaa}.contact textarea{height:100px;max-width:100%;resize:none}.contact button[type=submit]{cursor:pointer;width:100%;border:none;background:#4CAF50;color:#FFF;margin:0 0 5px;padding:10px;font-size:15px}.contact button[type=submit]:hover{background:#43A047;-webkit-transition:background .3s ease-in-out;-moz-transition:background .3s ease-in-out;transition:background-color .3s ease-in-out}.contact button[type=submit]:active{box-shadow:inset 0 1px 3px rgba(0,0,0,.5)}.contact input:focus,.contact textarea:focus{outline:0;border:1px solid #aaa}::-webkit-input-placeholder{color:#888}:-moz-placeholder{color:#888}::-moz-placeholder{color:#888}:-ms-input-placeholder{color:#888}
		#consignes,#menu{background-color:#FFF}#menu li a,.accordion__trigger{display:block;text-decoration:none}#consignes{width:800px;padding:30px;margin:10px auto;line-height:20px}.w50{width:47%}.clear{clear:both}.left{float:left}.right{float:right}#menu{width:40%;padding:20px;margin:20px}#menu li{list-style:none;text-align:right}#menu li a{padding:10px 5px;color:#777}#menu li a:hover{background-color:#4CAF50;color:#fff}.accordion{max-width:600px;padding:0;margin:10px auto 0;border:1px solid #eee;list-style-type:none;box-shadow:0 2px 4px rgba(0,0,0,.1)}.accordion__item:not(:first-child){border-top:1px solid #eee}.accordion__item ul li{margin-left:20px}.accordion__trigger{position:relative;padding:10px 12px;font-size:16px;font-weight:700;color:#777}.accordion__trigger::after{position:absolute;top:50%;right:12px;-webkit-transform:translateY(-50%);transform:translateY(-50%);border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:8px solid #333;-webkit-transition:all .2s linear;transition:all .2s linear;content:''}.accordion__trigger.is-collapsed::after{-webkit-transform:translateY(-50%) rotate(90deg);transform:translateY(-50%) rotate(90deg)}.accordion__content{padding:10px 12px 16px}[data-accordion=content-container]{height:0;overflow:hidden;-webkit-transition:all .1s linear;transition:all .1s linear}
	</style>
</head>
<body>

	<?php

	//on récupère la session
	session_start();

	//on vérifie que la session soit active
	if(!isset($_SESSION["nom"])){

		//on la quitte
		session_destroy();

		//retour à l'accueil
		header("Location: ./index_ex_3.php");
	}

	//initiation des variables
	$s_nom    = htmlspecialchars($_SESSION["nom"]);
	$s_prenom = htmlspecialchars($_SESSION["prenom"]);
	$s_email  = htmlspecialchars($_SESSION["email"]);
	$s_sexe   = htmlspecialchars($_SESSION["sexe"]);

	$_message_err = "";
	
	$_nom    = htmlspecialchars($_POST["nom"]);
	$_prenom = htmlspecialchars($_POST["prenom"]);
	$_email  = htmlspecialchars($_POST["email"]);
	$_sexe  = htmlspecialchars($_POST["objet"]);



	//si l'utilisateur a envoyé des infos
	if (isset($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["objet"])){

		//on lance la vérification des infos
		include ('./verif.php');


		//si les vérifs sont OK
		if ($_message_err === "") {

			//on sauvegarde les infos de connexion
					$_SESSION["nom"]    = $_nom;
					$_SESSION["prenom"] = $_prenom;
					$_SESSION["email"]  = $_email;
					$_SESSION["sexe"]   = $_sexe;

		//retour à l'accueil
		header("Location: ./recapitulatif.php");		
		}
	}

	?>

	<div class="container">

				<!--Affichage du formulaire pré-rempli -->
				<form class="contact w50 left" method="POST">
					<h3>
						<?php
						echo $s_nom." ".$s_prenom;
						?>		
					</h3>
					<fieldset>
						<input name="nom" value="<?php echo $s_nom?>" 
						type="text" tabindex="1">
					</fieldset>
					<fieldset>
						<input name="prenom" value="<?php echo $s_prenom?>" type="text" tabindex="2">
					</fieldset>
					<fieldset>
						<input name="email" value="<?php echo $s_email?>" type="email" tabindex="3">
					</fieldset>
					<fieldset>
						<select name="objet" tabindex="4">
							<option></option>
							<option value="un Homme" <?php if($s_sexe == "un Homme"){ echo ' selected="selected"'; } ?> >Je suis un homme</option>
							<option value="une Femme" <?php if($s_sexe == "une Femme"){ echo ' selected="selected"'; } ?> >Je suis une femme</option>
							<option value="Indéterminé" <?php if($s_sexe == "Indéterminé"){ echo ' selected="selected"'; } ?> >Je suis</option>
							<option value="en plein doute" <?php if($s_sexe == "en plein doute"){ echo ' selected="selected"'; } ?> >Suis-je ?</option>
						</select>
					</fieldset>


					<?php
					//message d'erreur en cas de formulaire incomplet
						echo $_message_err;
					?>

					<fieldset>
						<button name="submit_post" type="submit" class="contact-submit">Envoyer</button>
					</fieldset>
				</form>


		<!--  MENU  -->
		<ul class="right" id="menu">
			<li>
				<h3>Menu</h3>
			</li>
			<li>
				<a href="parametres.php" title="Modifier mes paramètres">Modifier mes paramètres</a>
			</li>
			<li>
				<a href="recapitulatif.php" title="Afficher le récapitulatif">Afficher le récapitulatif</a>
			</li>
			<li>
				<a href="deconnexion.php" title="Me déconnecter">Me déconnecter</a>
			</li>
			</ul>

	</div>	

</body>
</html>