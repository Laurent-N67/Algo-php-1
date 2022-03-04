<h1>exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>réponse</h2>

<?php

//code

$franc = 100;
$valeurE =  0.152449;
$totalE = $franc * $valeurE;
echo "le montant en franc = $franc<br>";
"$franc franc= $totalE";
$twoDecNum = sprintf('%0.2f', round($totalE, 2));
echo "$franc franc = $twoDecNum";