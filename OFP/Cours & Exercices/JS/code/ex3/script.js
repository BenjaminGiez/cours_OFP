let randomNumber = Math.random();
randomNumber = Math.floor(randomNumber * 100);

console.log(randomNumber);
let enteredNumber = prompt("Saisir un nombre ?");
if(enteredNumber<randomNumber){
    result = "Le chiffre saisi est inférieur au random";
}
else if (enteredNumber>randomNumber) {
    result = "Le chiffre saisi est supérieur au random";
} else {
    result = "Le chiffre saisi est égal au random";
}
console.log(result);