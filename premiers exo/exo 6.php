<h1>exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>réponse</h2>

<?php

//code

$nbArticles = 5;
$prixHT = 9.99;
$tauxTVA = 0.20;
$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
$totalTTC2 = $nbArticles * $prixHT * (1 + $tauxTVA);
$twoDecNum = sprintf('%0.1f', round($tauxTVA, 1));
echo "Prix unitaire de l'article :$prixHT €<br>";
echo "Quantity : $nbArticles<br>";
echo "Taux de TVA : $twoDecNum<br>";
echo "Le total TTC est de $totalTTC €<br>";