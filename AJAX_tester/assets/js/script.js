/**
 * On attend que le DOM soit totalement chargé
 */
document.addEventListener("DOMContentLoaded", function() {
    /**
     * Initialisation des variables pointant vers les noeuds que l'on va manipuler
     */
    var $target = $('#card-container');     //~ Element contenant les identités
    var $button = $('#btn-load');           //~ Bouton de chargement de nouvelles identités
    var $loader = $('#loader');             //~ Ajax loader

    //~ On initialise le traitement
    init();

    /**
     * Fonction permettant d'initialisation les évènements et les traitements
     */
    function init(){
        //~ Chargement de nouvelles identités 
        $button.addEventListener('click', function(){
            loadUsers(['results=10']);      //́~ 10 nouvelles identités par chargement
        });
    }

    /**
     * Fonction loadUsers
     * Effectue une requête AJAX pour récupérer les identités
     * @param {array} _params : paramètres transmis à l'appel AJAX 
     */
    function loadUsers(_params){
        //~ On affiche l'AJAX loader
        $loader.style.visibility = "visible";
        
        //~ Initialisation de l'objet XHR
        var xhr = getRequest();
        if(xhr != false){       //~ Si tout est ok
            xhr.open('POST', 'get_users.php', true);    //́~ Requête POST vers la page get_users.php 
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');  //~ Heder spécifique à la méthode POST
            xhr.onreadystatechange = function() {       //́~ Dès que l'état de la requête change, on effectue une vérification 
                if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)){  //́~ Requête ayant aboutie (state 4), page trouvée (status 200)
                    $loader.style.visibility = "hidden";        //~ On masque l'AJAX loader
                    var o_response = JSON.parse(this.responseText);     //~ On transforme le retour textuel en objet JSON
                    return showResult(o_response.results);              //~ Affichage des résultats
                }
            }
            //~ On ajoute une temporisation de 3 secondes afin de simuler une latence de chargement
            setTimeout(function(){
                xhr.send(encodeURI(_params.join('&')));         //~ Notre requête AJAX est envoyée avec ses paramètres
            }, 3000);
        }else{
            alert("La requête AJAX n'a pu aboutir.");
        }
    }

    /**
     * Fonction scrollBottom
     * Scroll de la page en bas de page
     */
    function scrollBottom(){
        var windowCoords = document.body.offsetHeight;      //~ On récupère la hauteur de notre page
        window.scrollTo(0, windowCoords);                   //~ Et zouip !
    }

    /**
     * Fonction showResult
     * Gère l'affichage des identités à partir des résultats transmis
     * @param {object} o_data : objet JSON contenant les identités
     */
    function showResult(o_data){
        var str_return = "";        //~ On initialise une chaine de caractère que l'on va concaténer
        
        //~ On boucle pour accéder à chaque identité
        o_data.forEach(o_user => {
            str_return += tplCardUser(o_user);      //~ On appelle notre fonction de templating pour chaque identité
        });
        $target.innerHTML += str_return;        //~ On ajoute le code HTML généré vers notre noeud cible
        scrollBottom();     //~ On scroll en bas de page
    }

    /**
     * Fonction tplCardUser
     * Retourne une chaine HTML contenant les informations injectées pour une identité donnée.
     * @param {object} o_user : objet JSON contenant une identité
     */
    function tplCardUser(o_user){
        /**
            Certaines variables nécessitent d'être ajuster, notamment pour gérer les majuscules des noms propres
        */
        var firstname = o_user.name.first.charAt(0).toUpperCase() + o_user.name.first.substr(1);        //~ Majuscule sur la première lettre
        var lastname = (o_user.name.last).toUpperCase();                                                //~ Nom en majuscule
        var town = o_user.location.city.charAt(0).toUpperCase() + o_user.location.city.substr(1);       //~ Majuscule sur la première lettre

        //~ Concaténation pour obtenir une carte d'identité composée des bonnes données
        var str_return = '  <article class="card">';
        str_return += '         <header class="card__title">';
        str_return += '             <h3>'+firstname+' '+lastname+'</h3>';
        str_return += '         </header>';
        str_return += '         <figure class="card__thumbnail">';
        str_return += '             <img src="'+o_user.picture.large+'">';
        str_return += '         </figure>';
        str_return += '         <main class="card__description">';
        str_return += '             <ul>';
        str_return += '                 <li>Âge : '+o_user.dob.age+' ans</li>';
        str_return += '                 <li>Téléphone : '+o_user.phone+'</li>';
        str_return += '                 <li>Email : '+o_user.email+'</li>';
        str_return += '                 <li>Ville : '+town+'</li>';
        str_return += '             </ul>';
        str_return += '         </main>';
        str_return += '     </article>';
        return str_return;
    }

    

    

    
});