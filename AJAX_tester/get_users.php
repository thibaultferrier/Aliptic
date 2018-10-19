<?php

    //~ URL vers l'API retournant un lot d'identité
    $api_cible = 'https://randomuser.me/api/';

    //~ On transforme nos paramètres POST en paramètres GET
    $_params = http_build_query($_POST);

    //~ On affiche le retour du fichier distant
    echo file_get_contents($api_cible.'?'.$_params);

?>