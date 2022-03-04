<h1>exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<h2>réponse</h2>

<?php

//code

$formateurs = [
    "mickael" => "FRA",
    "virgile" =>"ESP",
    "marie-claire" => "ENG",
    "georges" => "ITA"
];

ksort($formateurs);

foreach($formateurs as $prenom => $langue){
    $prenom1 = ucwords($prenom);
    if($langue == "FRA") {
        $resultat = "Salut $prenom1<br>";
    } elseif($langue == "ESP") {
        $resultat = "Hola $prenom1<br>";
    } elseif($langue == "ENG") {
        $resultat = "Hello $prenom1<br>";
    }else {
        $resultat = "I'm sorry $prenom1 but i don't speak $langue<br>";
    }
    
    echo "$resultat";
}