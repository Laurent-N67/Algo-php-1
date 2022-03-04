<h1>exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>réponse</h2>

<?php

//code

class Personne{
    private $_nom;
    private $_prenom;
    private $_naissance;

    function __construct($nom, $prenom, $naissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_naissance = $naissance;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getSurname(){
        return $this->_prenom;
    }
    public function getBirth(){
        return $this->_naissance;
    
    }
    public function getAge(){
         $intervale=date_diff(new DateTime($this-> getBirth()), new DateTime());
         return $intervale -> y;
    }
}


$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne ("duchemin", "Alice", "1985-01-17");

var_dump($p1);
echo $p1 -> getNom();
echo " ";
echo $p1 -> getSurname();
echo " ";
echo $p1 -> getAge();
echo "<br>";
echo $p2 -> getNom();
echo " ";
echo $p2 -> getSurname();
echo " ";
echo $p2 -> getAge();
echo "<br>";
