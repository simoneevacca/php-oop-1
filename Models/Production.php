<?php

class Production 
{
    public $title;
    public $language;
    public $vote;

    public $genre;

    public function __construct($title, $language, $vote, Genre $genre){
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
        

    }


    public function getData(){
        $title = $this->title;
        $language = $this->language;
        $vote = $this->vote;

        return "Production: $title $language $vote";

    }

    public function getDataObject(){
        $title = $this->title;
        $language = $this->language;
        $vote = $this->vote;
        $name = $this->genre->name;
        $description = $this->genre->description;


        return [
            'title' => $title,
            'language'=> $language,
            'vote'=> $vote,
            'name'=> $name,
            'description'=> $description,
        ];

    }

}