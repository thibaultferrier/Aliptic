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
	<div id="main">
		<div id="consignes">
			<h3>Consignes</h3>
			<p>
				En vous basant sur le template HTML suivant, créez les pages et traitements PHP associés : 
			</p>
			<ul class="accordion">
				<li class="accordion__item">
					<a href="#" data-accordion="trigger" class="accordion__trigger">
						Page "<i>index.php</i>" <small>(cliquer pour afficher)</small>
					</a>
					<div data-accordion="content-container">
						<div data-accordion="content" class="accordion__content">
							<strong>Travail à réaliser</strong>
							<ul>
								<li>lors de l'envoi du formulaire d'identification, vérifier que les paramètres sont correctement remplis</li>
								<li>si cette condition est respectée, les données sont stockées en SESSION</li>
								<li>le formulaire d'identification est alors remplacé par un message "Bonjour [NOM] [Prénom]"</li>
								<li>le bloc "Menu" ne doit s'afficher que si l'utilisateur est identifié. Par défaut, il est donc à masquer</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="accordion__item">
					<a href="#" data-accordion="trigger" class="accordion__trigger">
						Page "<i>parametres.php</i>" <small>(cliquer pour afficher)</small>
					</a>
					<div data-accordion="content-container">
						<div data-accordion="content" class="accordion__content">
							<strong>Travail à réaliser</strong>
							<ul>
								<li>créer la page :)</li>
								<li>si l'utilisateur n'est pas identifié, le rediriger en page "<i>index.php</i>"</li>
								<li>afficher le menu (vous pouvez utiliser le code de la page "<i>index.php</i>")</li>
								<li>afficher un formulaire comme celui de la page "<i>index.php</i>", pré-rempli par les données utilisateurs stockées en SESSION</li>
								<li>lors de l'envoi de ce formulaire de modification, vérifier que les paramètres sont correctement remplis</li>
								<li>si cette condition est respectée, les données stockées en SESSION sont modifiées</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="accordion__item">
					<a href="#" data-accordion="trigger" class="accordion__trigger">
						Page "<i>recapitulatif.php</i>" <small>(cliquer pour afficher)</small>
					</a>
					<div data-accordion="content-container">
						<div data-accordion="content" class="accordion__content">
							<strong>Travail à réaliser</strong>
							<ul>
								<li>créer la page :)</li>
								<li>si l'utilisateur n'est pas identifié, le rediriger en page "<i>index.php</i>"</li>
								<li>afficher le menu (vous pouvez utiliser le code de la page "<i>index.php</i>")</li>
								<li>afficher le message suivant (les valeurs entre crochets sont à remplacer par les variables de SESSION associées) : <strong>"Bonjour [NOM] [Prénom] ! Votre adresse e-mail est "[EMAIL]". Vous êtes [SEXE]."</strong></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="accordion__item">
					<a href="#" data-accordion="trigger" class="accordion__trigger">
						Page "<i>deconnexion.php</i>" <small>(cliquer pour afficher)</small>
					</a>
					<div data-accordion="content-container">
						<div data-accordion="content" class="accordion__content">
							<strong>Travail à réaliser</strong>
							<ul>
								<li>créer la page :)</li>
								<li>deconnecter l'utilisateur, supprimer les variables de SESSION</li>
								<li>rediriger sur la page "<i>index.php</i>"</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="container">  

				<?php

				//on sécurise les informations
				$_nom    = htmlspecialchars($_POST["nom"]);
				$_prenom = htmlspecialchars($_POST["prenom"]);
				$_email  = htmlspecialchars($_POST["email"]);
				$_sexe  = htmlspecialchars($_POST["objet"]);

				$_message_err = "";


				//on vérifie l'existence des données POST
				if (isset($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["objet"])) {

					//on lance la vérification des infos
					include ('./verif.php');
				
					//si pas d'erreurs on lance la session	
					if ($_message_err === ""){
						goto bienvenue;
					}	
				}

				//formulaire d'inscription
				affichage: {	
					?>
					<form class="contact w50 left" method="POST">
					<h3>Merci de vous identifier</h3>
					<fieldset>
						<input name="nom" placeholder="Votre nom" type="text" tabindex="1">
					</fieldset>
					<fieldset>
						<input name="prenom" placeholder="Votre prénom" type="text" tabindex="2">
					</fieldset>
					<fieldset>
						<input name="email" placeholder="Votre adresse email" type="email" tabindex="3">
					</fieldset>
					<fieldset>
						<select name="objet" tabindex="4">
							<option></option>
							<option value="un Homme">Je suis un homme</option>
							<option value="une Femme">Je suis une femme</option>
							<option value="Indéterminé">Je suis</option>
							<option value="en plein doute">Suis-je ?</option>
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
				<?php	
				goto script;
				}


				//affichage du menu, ouverture de la session
				bienvenue : {
					echo "<div>
							<h3>Bonjour ".$_nom." ".$_prenom.'
							</h3>
						  </div>';

					//on démarre la session
					session_start();
			
					//on sauvegarde les infos de connexion
					$_SESSION["nom"]    = $_nom;
					$_SESSION["prenom"] = $_prenom;
					$_SESSION["email"]  = $_email;
					$_SESSION["sexe"]   = $_sexe;
					

					?>
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
					<?php	
			}
			?>
		</div>
	</div>


	<?php
	script:
	?>
	<script>
		function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}for(var Accordion=function(){function e(t){_classCallCheck(this,e),t.addEventListener("click",this._toggleContent.bind(this,t))}return e.prototype._openContent=function(e,t,r){t.style.height=r+"px",e.classList.add("is-collapsed")},e.prototype._closeContent=function(e,t){t.style.height="0px",e.classList.remove("is-collapsed")},e.prototype._toggleContent=function(e){if(e.classList.contains("is-collapsed"))this._closeContent(e,e.nextElementSibling);else{for(var t=e.nextElementSibling.querySelectorAll('[data-accordion="content"]')[0].offsetHeight,r=document.querySelectorAll('[data-accordion="trigger"]'),i=Array.isArray(r),o=0,r=i?r:r[Symbol.iterator]();;){var n;if(i){if(o>=r.length)break;n=r[o++]}else{if(o=r.next(),o.done)break;n=o.value}var a=n;this._closeContent(e,a.nextElementSibling),a.classList.remove("is-collapsed")}this._openContent(e,e.nextElementSibling,t)}},e}(),_iterator2=document.querySelectorAll('[data-accordion="trigger"]'),_isArray2=Array.isArray(_iterator2),_i2=0,_iterator2=_isArray2?_iterator2:_iterator2[Symbol.iterator]();;){var _ref2;if(_isArray2){if(_i2>=_iterator2.length)break;_ref2=_iterator2[_i2++]}else{if(_i2=_iterator2.next(),_i2.done)break;_ref2=_i2.value}var e=_ref2,newAccordion=new Accordion(e)}
	</script>
</body>
</html>