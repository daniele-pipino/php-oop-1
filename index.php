<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza proprietà
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump -->

<?php

// creazione classe Moovie
class Movie
{
    public $title = 'Ritorno al futuro';
    public $author = 'Gino';
    public $duration = '1H:28M';
    public $description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque optio odit pariatur quo in saepe architecto, dolores quam. Nesciunt explicabo exercitationem, quae nemo aliquid consequuntur perferendis maiores natus ullam saepe.';

    public function __construct($_title, $_author, $_duration, $_description)
    {
        $this->title =  $_title;
        $this->author = $_author;
        $this->duration = $_duration;
        $this->description = $_description;
    }
}

?>