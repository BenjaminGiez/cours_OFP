const title = document.getElementById('title');
function changeTitle() {
    if (title.innerText== "Salut !")
    {
        title.innerText = "Je suis designer Web";
        
    }
    else if
        (title.innerText== "Je suis designer Web")
        {
            title.innerText = "Je sais concevoir";
            
    }
    else if
        (title.innerText== "Je sais concevoir")
    {
        title.innerText = "et developper des sites web !";
        
    }
    else if
    (title.innerText== "et developper des sites web !")
{
    title.innerText = "Salut !";
    
}
}
setInterval(changeTitle, 3000);