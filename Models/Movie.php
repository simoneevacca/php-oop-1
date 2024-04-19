<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production 
{
    public $profit;
    public $duration;

    public function __construct($title, $language, $vote, Genre $genre, $profit, $duration) {

        parent::__construct($title, $language, $vote, $genre);
        $this->profit = $profit;
        $this->duration = $duration;
}


public function getDataObject(){
    $title = $this->title;
    $language = $this->language;
    $vote = $this->vote;
    $name = $this->genre->name;
    $description = $this->genre->description;
    $profit = $this->profit;
    $duration = $this->duration;



    return [
        'title' => $title,
        'language'=> $language,
        'vote'=> $vote,
        'name'=> $name,
        'description'=> $description,
        'profit'=> 'Profitto:' . ' ' . $profit,
        'duration'=> 'Durata:' . ' ' . $duration,

    ];

}

}