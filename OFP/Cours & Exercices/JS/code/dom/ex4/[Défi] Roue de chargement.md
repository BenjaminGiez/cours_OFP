# [Défi] Roue de chargement

## Objectif :
Au lancement de la page, une roue de chargement tourne durant 3 secondes avant de disparaître pour laisser la place au contenu de la page. 

![text](https://github.com/Abardin-dev/Atelier/blob/main/Images/JavaScript/roue.gif?raw=true)

## Cadre de travail :

Créez un fichier « index.html » avec le contenu suivant : 
```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Animation</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div id="loadingAnimation"></div>
    <div id="displayContent">
      <img src="logo_acs.png" alt="logo acs">
    </div>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
```

Créez ensuite un fichier « main.css  » dans lequel vous mettrez le contenu suivant :

```css
#displayContent {
  display: none;
  text-align: center;
  margin-top: 40vh;
  transform: translateY(-50%);
}

#loadingAnimation {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 12vh;
  height: 12vh;
  border: 16px solid #f3f3f3;
  border-radius: 48%;
  border-top: 16px solid #d31f43;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
```

Enregistrez l'image suivante à la racine du répertoire : 

![text](https://github.com/Abardin-dev/Atelier/blob/main/Images/JavaScript/roue.png?raw=true)

Enfin, créez un fichier « main.js » :

```javascript
const loading = document.getElementById("loadingAnimation") ;
const content = document.getElementById("displayContent") ;

window.onload = // écrivez du code ici 

function showContent() {
  // et là
}
```

## Consigne : 
L'exercice consiste à changer les propriétés CSS « display » des 2 divs après un laps de temps (par exemple 3 secondes).


### Du JS utile à connaître pour réussir l'exercice : 

window
onload
setTimeout
style.display