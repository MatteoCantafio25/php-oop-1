<?php

class Movie {
    public $title;
    public $manufacturing_company;
    public $country;

     public function __construct($title, $manufacturing_company, $country ){
        $this->title = $title;
        $this->manufacturing_company = $manufacturing_company;
        $this->country = $country;
     }

    public function getDescription(){
        return "Il titolo del film è {$this->title}<br> Prodotto da {$this->manufacturing_company} in {$this->country}";
    }
}

// Istanzio l'oggetto
$film = new Movie('Topolino','Disney','Usa');

// Controllo l'oggetto
var_dump($film);

// Stampo in pagina la descrizione
echo $film->getDescription();



?>