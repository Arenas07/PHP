<?php

interface GetInfo{
    public function getInfo(): string;
}

class Adress implements GetInfo{
    protected $adress;

    public function __construct($adress){
        $this->adress =$adress;

    }

    public function getInfo() : string{
        return $this->adress;
    }
}


class WebSite implements GetInfo{
    protected $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function getInfo(): string{
        return file_get_contents($this->url);
    }
}
function printInfo(GetInfo $site){
    echo $site->getInfo();
}

$adress = new Adress("Calle 123");
$website = new WebSite("https//you");
printInfo($website);
