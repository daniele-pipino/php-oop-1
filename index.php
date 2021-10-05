<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza proprietà
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump -->

<?php

// creazione classe Moovie
class Movie
{
    //* PROPERTIES
    public $title;
    public $author;
    public $duration;
    public $description;

    //* METHODS

    public function print()
    {
        echo $this->title  . '</br>';
        echo $this->author  . '</br>';
        echo $this->duration  . '</br>';
        echo $this->description  . '</br>';
    }

    //* CONSTRUCT
    public function __construct($_title, $_author, $_duration, $_description)
    {
        $this->title =  $_title;
        $this->author = $_author;
        $this->duration = $_duration;
        $this->description = $_description;
    }
}



//* CREAZIONE ISTANZE
$film1 = new Movie('Harry Potter', 'J.K.Rowling', '2h', 'proprio bello');
$film2 = new Movie('Iron Man', 'Marvel', '2h', 'Troppo bello');
//* stampa classi con metodo inserito in esse
$film1->print();
$film2->print();


?>