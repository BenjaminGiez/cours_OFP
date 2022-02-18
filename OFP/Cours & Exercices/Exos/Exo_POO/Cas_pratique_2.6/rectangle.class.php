<?php
    class Rectangle{
        public $longueur;
        public $largeur;
        public $perimetre;
        //*Constructeur
        public function __construct($newLongueur, $newLargeur){
            $this->longueur = $newLongueur;
            $this->largeur = $newLargeur;
        }
public function getnewLongueur()
{
    return $this->longueur;
}
public function getnewLargeur()
{
    return $this->largeur;
}
public function setPerimetre ()
    {
    $this->perimetre = 2*($this->longueur + $this->largeur);
    }
public function getPerimetre ()
{
    return $this->perimetre;
}
    }

    //* CORRIGÉ
    ?>


