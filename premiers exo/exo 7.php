<h1>exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

<h2>réponse</h2>

<?php

//code


$age = 9;

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($age >= 12) {
        $resultat = "cadet";
    } elseif($age >= 10) {
        $resultat = "Minime";
    } elseif($age >= 8) {
        $resultat = "pupille";
    } elseif($age >= 6) {
        $resultat = "Poussin";
    } else {
        $resultat = "n'appartient a aucune catégorie";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}
