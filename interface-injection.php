<?php

interface InformationDI {
    public function getInformation();
}

class MeineKlasse {
    private $info;
    
    public function setInfo(InformationDI $info_in) {
        $this->info = $info_in;
    }
    
    public function getNews() {
        echo $this->info->getInformation();
    }
}

class Information implements InformationDI {
    public function getInformation() {
        return "hallo";
    }
}

$info = new Information();
$meine_klasse = new MeineKlasse();
$meine_klasse->setInfo($info);
$meine_klasse->getNews();
