const myBtn = document.getElementById('myBtn') ;


const cntClic = document.getElementById('cntClic');
var nbClic = 0;

myBtn.addEventListener ('click', click)
    function click (){
nbClic++;
    

cntClic.innerText = ('Vous avez cliqué ' + nbClic + 'fois');
console.log ('Vous avez cliqué ' + nbClic + 'fois')}