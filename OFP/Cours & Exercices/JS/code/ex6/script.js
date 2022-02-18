/*let dataTable = [24,99,2,4,11,24]; // Jeu de données fournis
dataTable.sort(function(a, b) {
    return a - b;
});


console.log(dataTable);*/

let dataTable = [24,99,2,4,11,24];
let dataTablecr = [24,99,2,4,11,24];
let dataTabledcr = [24,99,2,4,11,24];


function ordreCroissant(a, b) {
return a - b;
}
function ordreDecroissant(a, b){
    return b - a;
}



console.log("Nombres : " + dataTablecr.join() +"\n");
console.log("Triés sans fonction de comparaison : " + dataTablecr.sort() +"\n");
console.log("Triés avec ordreCroissant  : " + dataTablecr.sort(ordreCroissant) +"\n\n");
// Sans comparaison, les nombres sont trés en Unicode[11 passera avnt 2 par exemple]
console.log("Chaînes numériques : " + dataTabledcr.join() +"\n");
console.log("Triées sans fonction de comparaison : " + dataTabledcr.sort() +"\n");
console.log("Triées avec ordreDecroissant : " + dataTabledcr.sort(ordreDecroissant) +"\n\n");

//        ↓ Boucle Alex ­­↓
/*
function sortTableIncreasing(table){
    let switching = true;
    while (switching === true) {
        let increment = 0;
        for (let i in table) {
            if(i === (table.length - 1)) {
                break;
            }
            if ( table[i] > table[parseInt(i)+1]) {
                let stockedValue = table[parseInt(i)+1];
                table[parseInt(i)+1] = table[i];
                table[i] = stockedValue;
                increment++;
            }
        }
        if (increment === 0) {
            switching = false;
        }
    }
    return table;
}
*/