<?php
class Personne{
    public $nom;
    public $prenom;
    public $age;
     public function __construct(string $var = "") {
        $this->nom = $var;
    }
    public function parler(){
       echo  $this->nom. "peut parler";
    }
}