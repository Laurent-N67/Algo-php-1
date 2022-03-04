<h1>exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme</p>

<h2>réponse</h2>

<?php

//code

$table = 6;
$length = 10;
$numero = 1;

echo "table de multiplication: $table <br>";
for($numero=1; $numero<=$length; $numero++)
 echo "$numero * $table = ".$numero * $table. "<br>";

$table2 = 9;
$length2 = 10;
$numero2 = 1;

echo "Multiplication table: $table2 <br>";
while($numero2 <= $length2)
{
 echo "$numero2 * $table2 = ".$numero2 * $table2. "<br>";
 $numero2++;
}