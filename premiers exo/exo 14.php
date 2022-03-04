<h1>exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours)</p>

<h2>réponse</h2>

<?php

//code

$naissance = "29-03-2002";
  
  $diff = date_diff(new DateTime($naissance), new DateTime());
  echo 'Vous etes agé de '.$diff->format('%y ans,%m mois,%d jours');  