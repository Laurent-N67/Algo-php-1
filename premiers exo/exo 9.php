<h1>exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>réponse</h2>

<?php

//code


$age = 40;
$sexe = "F";
if(gettype($age) == "double" || gettype($age) == "integer") {
    
    if($age >= 20 && $sexe == "H" || $age >= 18 && $age <= 35 && $sexe == "F") {
        $resultat = "imposable";
    } else { 
        $resultat = "non imposable";
    }
    
echo "Age : $age <br>";
echo "Sexe $sexe <br>";
echo "$resultat <br>";
}
