<?php

//Variables :
/*
Ceci est un commentaire 
multiligne
*/

$toto;
$titi = 2;
$tata = 5;

$toto = $tata + $titi;
$titi = $titi + 2;
$test = "world";
$bool = false;
echo "Hello".$test." Alors";
echo $toto;

//Conditions
if($bool){
    echo 'VRAI !!!';
}

if ( $toto < 6) {
    echo 'inférieur';
}
elseif ($toto == 7) {
        echo 'égal';
}
else {
    echo 'supérieur';
}

//Boucles
$tata = $tata +1;
// ==
$tata++;
$tata--;
echo '<br>';
for ($i=0; $i < 10 ; $i++) { 
   echo $i;
}
echo '<br>';
$a =1;
while ($a <= 10) {
    echo $a;
    $a++;
}

echo '<br>';
$b=11;
do {
    echo '$b';
} while ($b <= 10);

//Tableaux

$tab = array(5,7,8,9,4);
$tab2 = ["salut", "saint", "baldoph"];
$tab2[2] = "Hello";
$tab2[] = ' !!!!';
echo '<br>';

echo '<br>';
for ($i=0; $i < count($tab2); $i++) { 
   echo $tab2[$i];
}

