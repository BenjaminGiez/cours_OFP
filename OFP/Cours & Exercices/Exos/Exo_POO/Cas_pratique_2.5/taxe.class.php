<?php
class Taxe {

public $prixHt ;
public $prixTtc ;
public $tva = 20;

public function getprixHt()
    {
return $this->prixHt;
    }
public function getTva(){
return $this->tva;
        }
public function getprixTtc()
    {
return $this->prixTtc;
    }


public function setPrixHt($new_prix_ht)
{
$this->prixHt = $new_prix_ht;
}
public function setTva($new_tva){
    $this->tva = $new_tva;
}

public function setPrixTtc(){
    $this->prixTtc = $this->prixHt + $this->prixHt / 100 * $this->tva;
}}