//quang le HTML est pret
document.addEventListener("DOMContentLoaded", function(event) {
	//affichage 1 et 2
	txt1 = document.getElementById('txt1');
	txt2 = document.getElementById('txt2');
	//clic event
	document.addEventListener("click",cliqué);
	function cliqué (truc) {
		var truc_cliqué = truc.target;
		var element_affichage = truc_cliqué.textContent;

		//si on clique sur un boutton
		if (truc_cliqué.nodeName === "BUTTON") {		
				//si on clique sur annuler
				if(element_affichage==="c"){
					affichage(txt1,"");
					affichage(txt2,"");
				//si on clique sur égal
				}else if (element_affichage==="=") {
					recup_info(txt2.value);
				//si on clique sur un bouton lambda
				} else {
					affichage(txt2,txt2.value+element_affichage);
				}
		};
	};
	function recup_info(operation){
			//découpe en fonction des operateurs
			var liste_operateur = /[+-/*]/;
			var liste_decoupe = operation.split(liste_operateur);
			//découpe et prend le dernier ou le premier
			var nbr1 = parseInt(liste_decoupe.shift());
			var nbr2 = parseInt(liste_decoupe.pop());
			//récupere l'operateur
			var index = operation.search(liste_operateur);
			var operateur = operation.substring(index,index+1);
			//lance les calculs
			calcul(nbr1,nbr2,operateur);
	};
	function calcul (nbr1,nbr2, operateur) {
			if (operateur === "+"){
				affichage(txt1,nbr1+nbr2);}
			if (operateur === "-"){
				affichage(txt1, nbr1-nbr2);}
			if (operateur === "*"){
				affichage(txt1, nbr1*nbr2);}
			if (operateur === "/"){
				affichage(txt1, nbr1/nbr2);}	
	};
	function affichage (cible,resultat){
		cible.value=resultat;
	}
}, false);