<h1>exercice 2</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci</p>

<h2>réponse</h2>

<?php

//code

$chaineDeCaractere = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($chaineDeCaractere);
echo "la phrase $chaineDeCaractere contient $nbMots mots<br>";