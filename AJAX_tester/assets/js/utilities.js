/**
 * Fonction getRequest
 * Initialise puis retourne un objet XMLHttpRequest selon le support du navigateur
 */
function getRequest(){
	var xhr;			
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();	
	}else if(window.ActiveXObject){
		xhr = new ActiveXObject("Microsoft.XMLHTTP");		
	}else{
		alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest.");
		return false;
	}			
	return xhr;
}

/**
 * Fonction $
 * Simplifie la gestion de sélécteur DOM
 * @param {string} selector 
 */
var $ = function(selector){
	if(selector.indexOf('#') !== -1){
		return document.querySelector(selector);
	}else{
		return document.querySelectorAll(selector);
	}
}
