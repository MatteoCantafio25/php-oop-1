<?php

// Creo la classe Movie
class Movie {
    // Variabili d'istanza
    public $title;
    public $manufacturing_company;
    public $country;
    public $director;

    // Costruttore
     public function __construct($title, $manufacturing_company, $country, Director $director ){
        $this->title = $title;
        $this->manufacturing_company = $manufacturing_company;
        $this->country = $country;
        $this->director = $director;
     }

    // Metodo
    public function getDescription(){
        return "Il titolo del film è {$this->title}<br> Prodotto da {$this->manufacturing_company}
         in {$this->country}<br> Il regista è {$this->director->getFullName()}";
    }
}

// Creo la classe Director
class Director{
    // Variabili d'istanza
    public $first_name;
    public $last_name;

    // Costruttore
    public function __construct($first_name, $last_name){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
     }

    // Metodo
    public function getFullName(){
        return "{$this->first_name} {$this->last_name}";
    }
}

// Istanzio l'oggetto dir
$dir = new Director('Pippo', 'Paperino');

// Istanzio l'oggetto film
$film = new Movie('Topolino','Disney','Usa', $dir);

// Controllo l'oggetto
var_dump($film);

// Stampo in pagina la descrizione
echo $film->getDescription();



?>