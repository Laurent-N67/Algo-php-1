<h1>exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>

<h2>réponse</h2>

<?php

//code

$du = 152;
$donne = 200;
$reste = "$donne"-"$du";

echo "montant à payer $du €<br>";
echo "montant verser $donne €<br>";
echo "reste rendu $reste<br>";
echo "-----------------<br>";
echo "rendu de monnaie:<br>";
 $reste1 = $reste % 10;
echo ("$reste" - "$reste1") / 10, " billets de 10€ --- " ;

$reste2 = $reste1 % 5;
echo ("$reste1" - "$reste2") / 5, " billets de 5€ --- " ;

$reste3 = $reste2 % 2;
echo ("$reste2" - "$reste3") / 2, " pieces de 2€ --- " ;

$reste4 = $reste3 % 1;
echo ("$reste3" - "$reste4") / 1, " pieces de 1€ " ;