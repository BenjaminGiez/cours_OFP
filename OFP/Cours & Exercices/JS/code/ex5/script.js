/*let list = Array();
let enteredNumber ;
let sum=0;
do{
    enteredNumber = prompt("Saisir un nombre  (Saisir 0 pour terminer)");
    list.push(parseInt(enteredNumber));
}  while (enteredNumber !=0);
for (let i = 0; i < list.length; i++) {
    sum += list[i];
}
console.log("Liste d'entrées = "+list);
console.log("Somme = "+sum);
console.log("Entrées = "+list.length);*/

var stringArray = ["Bosse", "Bleue", "Béluga"];
var numericStringArray = ["80", "9", "700"];
var numberArray = [40, 1, 5, 200];
var mixedNumericArray = ["80", "9", "700", 40, 1, 5, 200];

function compareNombres(a, b) {
return a - b;
}

console.log("Chaînes : " + stringArray.join() +"\n");
console.log("Triées : " + stringArray.sort() +"\n\n");

console.log("Nombres : " + numberArray.join() +"\n");
console.log("Triés sans fonction de comparaison : " + numberArray.sort() +"\n");
console.log("Triés avec compareNombres : " + numberArray.sort(compareNombres) +"\n\n");

console.log("Chaînes numériques : " + numericStringArray.join() +"\n");
console.log("Triées sans fonction de comparaison : " + numericStringArray.sort() +"\n");
console.log("Triées avec compareNombres : " + numericStringArray.sort(compareNombres) +"\n\n");

console.log("Nombres et chaînes numériques : " + mixedNumericArray.join() +"\n");
console.log("Triés sans fonction de comparaison : " + mixedNumericArray.sort() +"\n");
console.log("Triés avec compareNombres : " + mixedNumericArray.sort(compareNombres) +"\n\n");