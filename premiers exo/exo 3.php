<h1>exercice 3</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>réponse</h2>

<?php

//code

$chaineDeCaractere = "notre formation DL commence aujourd'hui";
echo "$chaineDeCaractere<br>";
echo str_replace("aujourd'hui", "demain", $chaineDeCaractere);
