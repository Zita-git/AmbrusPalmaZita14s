<?php
 namespace Petrik14S\AmbrusPalmaZita\Halloween\models;

 class Lako{
    public string $nev;
     
    public function __construct(string $nev) {
        $this->nev = $nev;
    }

    public function getNev() : string {
        return $this->nev;
    }


 }