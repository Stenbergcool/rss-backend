<?php

namespace App\Classes;

class Fetcher {

    public function __construct()
    {

    }

    public function fetchNews() {
        $articles = simplexml_load_file("https://rss.aftonbladet.se/rss2/small/pages/sections/senastenytt/");
        $json = json_encode($articles);
        $array = json_decode($json,TRUE);
        return $array;
    }
}