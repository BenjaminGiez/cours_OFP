<?php
require 'rectangle.class.php';
require 'carre.class.php';

$rectangle = new Rectangle(20, 10);
$carre = new Carre(18);

$rectangle->setPerimetre();
$carre->setPerimetre();
$carre->setCouleur('rouge');

$rectangle->getPerimetre();
echo 'Le périmètre du rectangle vaut '.$rectangle->getPerimetre();

$carre->getCouleur();
$carre->getPerimetre();
echo '<br> Le périmètre du carré vaut ' .$carre->getPerimetre();

//* CORRIGÉ