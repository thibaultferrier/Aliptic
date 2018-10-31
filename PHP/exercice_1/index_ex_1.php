<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Période 3 - Semaine 1</title>
  <style>
    body{font-family:Arial}
    #content{width:500px;border:1px solid black;padding:10px;margin:auto;}
    p{font-size:12px;}
    span{font-size:12px;font-weight:bold}
  </style>
</head>
<body>
  <div id="content">
  <p>
    <strong>Exercice 1</strong> (<i>temps restant avant échéance</i>): de l'intérêt des pages dynamiques.
  </p>
  <?php

    $para = "L'examen aura lieu dans ";
    $now = new DateTime();
    $presentiel = "2018-11-05 14:00:00";

    $t_presentiel = new DateTime($presentiel);

    $difference = $t_presentiel->diff($now);

    echo $para;
    echo '<ul><li>'.$difference->d.' jours </li>';
    echo '<li>'.$difference->h.' heures </li>';
    echo '<li>'.$difference->i.' minutes </li>';
    echo '<li>'.$difference->s.' secondes </li></ul>';

  ?>

  <p>
    <strong>Exercice 2</strong> (<i>statistiques utilisateurs</i>): utiliser une boucle for et des structures conditionnelles.
  </p>
  <?php
    $groupe = array(
      array('name' => 'Arthur', 'age' => 23, 'sexe' => 'h'),  // $groupe[0]
      array('name' => 'Josiane', 'age' => 17, 'sexe' => 'f'), // $groupe[1]
      array('name' => 'Fred', 'age' => 16, 'sexe' => 'h'),    // ...
      array('name' => 'Philippe', 'age' => 19, 'sexe' => 'h'),
      array('name' => 'Catherine', 'age' => 16, 'sexe' => 'f'),
      array('name' => 'Julie', 'age' => 16, 'sexe' => 'f'),
      array('name' => 'Elisa', 'age' => 21, 'sexe' => 'f'),
      array('name' => 'Robert', 'age' => 15, 'sexe' => 'h'),
      array('name' => 'George', 'age' => 18, 'sexe' => ''),
      array('name' => 'Léa', 'age' => 20, 'sexe' => 'f'),
      array('name' => 'Manon', 'age' => 21, 'sexe' => 'f')
    );

    //déclaration de variables vides
    $nbr_majeur = 0;
    $nbr_mineur = 0;
    $nbr_h = 0;
    $nbr_f = 0;
    $nbr_sexe_ind =0;


    //on récupère le nombre de personnes majeures / mineures
    foreach ($groupe as $value) {
      if ($value['age']>=18){
        $nbr_majeur ++;
      } else {
        $nbr_mineur ++;
      }
    };


    //on récupère le nombre de personnes h / f / ?
    foreach ($groupe as $value) {
      $sexe = $value['sexe'];
      switch ($sexe) {
        case 'h':
          $nbr_h ++;          
          break;

        case 'f':
            $nbr_f++;
            break;  
        
        default:
          $nbr_sexe_ind ++;
          break;
      }
     

    };


    //sortie
    echo '<ul><li>'.$nbr_majeur.' personne(s) majeure(s)</li>';
    echo '<li>'.$nbr_mineur.' personne(s) mineur(s)</li>';
    echo '<li>'.$nbr_f.' personne(s) déclaré(s) de sexe féminin</li>';
    echo '<li>'.$nbr_h.' personne(s) déclaré(s) de sexe masculin</li>';
    echo '<li>'.$nbr_sexe_ind.' dont le sexe non ou mal renseigné</li></ul>';


  ?>

  </div>
</body>
</html>

