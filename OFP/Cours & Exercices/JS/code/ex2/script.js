let year = prompt("Saisir un nombre d'années ?");
let mois = 12 * year;
let jours = 365 * year;
let heures = 24 * jours;
let minutes = 60 * heures;
let secondes = 60 * minutes;

let result =    "nombre de secondes : " + secondes +
                "nombre de minutes : " + minutes +
                "nombre de heures : " + heures +
                "nombre de jours : " + jours +
                "nombre de mois : " + mois;

console.log(result);