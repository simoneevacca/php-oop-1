<?php

class Production 
{
    public $title;
    public $language;
    public $vote;

    public function __construct($title, $language, $vote){
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;

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

        return [
            'title' => $title,
            'language'=> $language,
            'vote'=> $vote
        ];

    }

}