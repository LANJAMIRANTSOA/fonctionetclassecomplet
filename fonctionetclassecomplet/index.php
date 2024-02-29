<?php

class Personne {
    public $nom;
    public $prenom;
    public $date_de_naissance;

    public function __construct($nom, $prenom, $date_de_naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_de_naissance = $date_de_naissance;
    }

    public function presenter() {
        return "Je m'appelle {$this->nom} {$this->prenom}";
    }

    public function age() {
        $aujourdhui = new DateTime();
        $date_naissance = new DateTime($this->date_de_naissance);
        $difference = $aujourdhui->diff($date_naissance);
        return $difference->y;
    }
}


$personneA = new Personne("Rakoto", "Benja", "2010-05-15"); 
$personneB = new Personne("Lanja", "Mirantsoa", "2005-01-06");

echo $personneA->presenter() . "\n";
echo "Âge : " . $personneA->age() . " ans\n" ."<br>" ."<br>";
echo $personneB->presenter() . "\n";
echo "Âge : " . $personneB->age() . " ans\n";

?>