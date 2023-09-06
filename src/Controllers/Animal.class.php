<?php
class Animal extends Personne{
    public function __construct(string $var = null) {
        $this->nom = $var;
    }
    public function Aboyer(){
        echo "L'animal $this->nom peut aboyer";
    }
}