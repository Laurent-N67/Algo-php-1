<h1>exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>réponse</h2>

<?php

//code

$eleves = [
    "cindy" => [12, 9, 19, 17, 12, 13],
    "pascal" => [8, 9, 12, 10, 17]
];

foreach($eleves as $prenom => $notes) {
    $notes2=implode(" ",$notes);
    echo "Les notes obtenues par l'éleve sont : $notes2  <br>";
    echo "sa moyenne générale est donc de :".calculerMoyenne($notes)."<br>";
    echo "<br>";
    
}
implode(" ",$notes);
function calculerMoyenne(array $notes) : float {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}