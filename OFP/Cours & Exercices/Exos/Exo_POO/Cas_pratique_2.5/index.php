<?php

require 'taxe.class.php';

$taxe1 = new Taxe ();
$taxe1->setPrixHt (20);
$taxe1->setPrixTtc ();
    
    echo 'Pour un prix Hors Taxe de '.$taxe1->getPrixHt ().' € '.'et une TVA à ' .$taxe1->getTva ().' % '.'le prix total est de '. $taxe1->getPrixTtc()." € ".'<br>';


$taxe2 = new Taxe ();
$taxe2->setPrixHt (30);
$taxe2->setTva (5.5);
$taxe2->setPrixTtc ();

    echo 'Pour un prix Hors Taxe de '.$taxe2->getPrixHt ().' € '.'et une TVA à ' .$taxe2->getTva ().' % '.'le prix total est de '. $taxe2->getPrixTtc()." € ".'<br>';
    

?>