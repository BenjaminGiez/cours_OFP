# [Défi] Verouillage Majuscule
## Objectif : 
Lorsque l'utilisateur s'apprête à renseigner un champs de formulaire et que le Verrouillage Majuscule est actif, le script le lui indique.

## Cadre de travail :

Créez un fichier « index.html » avec le contenu suivant : 

```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <p>Enable or disable caps lock :</p>
    <input id="input">
    <p id="warning">⚠️ Caps Lock is activated...</p>

    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
```

Créez ensuite un fichier « main.css » :

```css
#warning {
  display:none;
  color:orange
}
```

Créez enfin un fichier « main.js » :

```javascript
document.getElementById("input").addEventListener("keyup", function(event) {
  //votre code ici
});
```

## Consigne : 

Utilisez « *event.getModifierState()* » et « *style.display* » pour détecter l'utilisation du Verouillage Majuscule et faire apparaître le message d'alerte.

## Bonus : 

* La même chose, mais avec le Verouillage Numérique ;
* Le script identifie si c'est le Verouillage Majuscule, le Verouillage Numérique ou les deux qui sont actifs et donne le message d'alerte correspondant à l'une de ces 3 situations.