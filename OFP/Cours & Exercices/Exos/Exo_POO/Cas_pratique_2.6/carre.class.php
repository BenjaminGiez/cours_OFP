<?php

class Carre extends Rectangle {

    private $couleur;

    public function __construct($newCote){
        $this->longueur = $newCote;
        $this->largeur = $newCote;
    }
    public function setCouleur($newCouleur)
    {
        $this->couleur = $newCouleur;
    }
    public function getCouleur()
    {
        echo '<br>le carré est ' .$this->couleur;
    }
}


//* CORRIGÉ