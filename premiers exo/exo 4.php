<h1>exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>réponse</h2>

<?php

//code



$chaineDeCaractere = "Engage le jeu que je le gagne";
$chaineDeCaractere1 = strtolower ($chaineDeCaractere);
$chaineDeCaractere2 = str_replace(" ", "", $chaineDeCaractere1);
$reverse = strrev($chaineDeCaractere2);

if($chaineDeCaractere2 == $reverse) {
echo  "La phrase $chaineDeCaractere est un palindrome";
}
else {
echo "La phrase $chaineDeCaractere n'est pas un palindrome";
}