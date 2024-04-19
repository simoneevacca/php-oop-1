<?php

require_once __DIR__ . '/Production.php';

class TVserie extends Production 
{
    public $seasons;
    

    public function __construct($title, $language, $vote, Genre $genre, $seasons) {

        parent::__construct($title, $language, $vote, $genre);
        $this->seasons = $seasons;
     
}


public function getDataObject(){
    $title = $this->title;
    $language = $this->language;
    $vote = $this->vote;
    $name = $this->genre->name;
    $description = $this->genre->description;
    $seasons = $this->seasons;
    



    return [
        'title' => $title,
        'language'=> $language,
        'vote'=> $vote,
        'name'=> $name,
        'description'=> $description,
        'seasons'=> 'stagioni:' . ' ' . $seasons,
  

    ];

}

}