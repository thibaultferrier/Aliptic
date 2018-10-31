<?php

//on récupère la session
session_start();

//on la quitte
session_destroy();

//retour à l'accueil
header("Location: ./index_ex_3.php");

?>