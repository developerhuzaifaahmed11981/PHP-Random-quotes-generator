<?php

namespace RandomQuotes;


class RandomQuotes{
    public function getRandomQutes(){
        $quotes = file_get_contents(__DIR__.'/../include/quotes.json');

        $quotes = json_decode($quotes,true);
        $index = mt_rand(0,count($quotes));
        return $quotes[$index];
    }
    public function generate(){

        return $this->getRandomQutes();

    }
}