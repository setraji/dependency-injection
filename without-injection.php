<?php

class MeineKlasse {
    private $info;
    
    public function __construct() {
        $this->info = new Information();
    }
    
    public function getNews() {
        echo $this->info->getInformation();
    }
}

class Information {
    public function getInformation() {
        return "hallo";
    }
}

$meine_klasse = new MeineKlasse();
$meine_klasse->getNews();
