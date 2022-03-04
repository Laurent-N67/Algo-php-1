<h1>exercice 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>réponse</h2>

<?php

//code

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);


echo "Il y a $nbMarques marques de voitures dans le tableau :";
 "<ul>";
foreach($marques as $marque) {
    echo "<li>$marque</li>";
}
"<ul>";
var_dump($marques);