<?php
require_once './src/RandomQuotes.php';

$rq = new \RandomQuotes\RandomQuotes();
print_r($rq->generate());
