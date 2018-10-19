document.addEventListener("DOMContentLoaded", function(event) { 
	
	//déclaration des var
	//selecteurs formulaire
	var btn_valid = document.getElementById('valider');
	var s_nom     =  document.getElementById('nom');
	var s_prenom  = document.querySelectorAll('.prenom')[0];
	var s_date  = document.getElementsByName('date_naissance')[0];
	var format_date = /^(\d{1,2}\/){2}\d{4}$/;
	var s_tel = document.getElementById('telephone');
	var s_diplome = document.getElementsByTagName('select')[0];
	var t_languages = document.querySelectorAll('[name=langage]')

	//selecteurs récap
	var recap_nom = document.getElementById('recap_nom');
	var recap_prenom = document.getElementById('recap_prenom');
	var recap_tel = document.getElementById('recap_tel');
	var recap_date = document.getElementById('recap_date');
	var recap_diplome = document.getElementById('recap_diplome');
	var recap_langages = document.getElementById('recap_langages');

	//var entrées du formulaire
	var nom, 
		prenom, 
		date, 
		tel, 
		diplome, 
		langages, 
		//variable de validité du formulaire
		valid = true;

	//declencheur 
	btn_valid.addEventListener("click", letsgo);

	//let's go
	function letsgo() {
		test();	

		if (test ()) {
			//alert ("aux gogols");
			
			recap ();
		}	

	}	


	function test () {

		nom = test_nom (s_nom)
		prenom = test_nom (s_prenom);
		date = test_date ();
		tel = test_tel();
		diplome = test_diplome ();
		langages = test_langages ();

		return valid
		
	}

	//test des noms
	function test_nom (input) {
		if (input.value == "") {
			affichage (input);
		
		} else {
			reset_affichage(input);
			valid = true;
			return input.value;
		}	
	}

	//test du telephone
	function test_tel () {

		if (s_tel.value.length!=10){
			affichage (s_tel)
		
		} else {
			reset_affichage(s_tel);
			valid = true;
			return s_tel.value;	
		}
	}

	// test de la date
	function test_date () {
		
		var date_pas_sure = s_date.value;
		
		if (!format_date.test(date_pas_sure)) {
			affichage (s_date)
		
		} else {
			reset_affichage(s_date);
			valid = true;
			return s_date.value;
		}	
	}

	//test des diplomes
	function test_diplome (){
		var s_diplome_selec = s_diplome.selectedIndex;
		var diplome_container = s_diplome.parentNode;

		if (s_diplome_selec==0){
			affichage (diplome_container);

		}  else {
			reset_affichage(diplome_container);
			valid = true;
			return s_diplome.value;
		}
	}

	//test des langages
	function test_langages() {
		var languages_parles =[];

		for(i=0; i<t_languages.length;i++) {
		var e = t_languages[i];

		if(e.checked){
			languages_parles.push(e.value);
			}
		languages_parles.join();	
			}

		if (languages_parles == ""){
			for(i=0; i<t_languages.length;i++) {
				affichage(t_languages[i].parentNode);
			}	
		
		} else {
			for(i=0; i<t_languages.length;i++) {
				reset_affichage(t_languages[i].parentNode);
			}
			valid = true;
			return languages_parles;
		};
	}

    function affichage (input) {
    		input.style.background = 'rgba(255, 26, 37, 0.84)';
    		input.style.borderRadius = '6px'
    		valid = false;
    		return
    }

    //reset affichage
    function reset_affichage(input) {
    		input.style.background = 'none';
    }

    //affichage du récap
    function recap () {
    	var t_recap = [recap_nom,
    				   recap_prenom,
    				   recap_tel,
    				   recap_date,
    				   recap_diplome,
    				   recap_langages];
    	var t_infos = [nom, 
    				   prenom, 
    				   tel, 
    				   date, 
    				   diplome, 
    				   langages];

    	for (i=0 ; i<t_recap.length ; i++) {
    		t_recap[i].innerHTML = t_infos[i];
    	}
    }	

});

