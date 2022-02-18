# [Défi] Afficher / cacher le mot de passe
## Objectif : 
Lorsque l'utilisateur entre un mot de passe, il est masqué par défaut. L'idée est de lui proposer une option pour afficher/masquer son mot de passe. 

![text](https://github.com/Abardin-dev/Atelier/blob/main/Images/JavaScript/mdp.gif?raw=true)

## Cadre de travail :

Créez un fichier « index.html » avec le contenu suivant : 
```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show / Hide Password</title>
  </head>
  <body>
    <p>
      <span>Password:</span> <input type="password" id="input"><br>
      <input id="checkbox" type="checkbox"><span id="display">Show/Hide</span>
    </p>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
```

Créez enfin un fichier « main.js » :

```javascript
document.getElementById('checkbox').addEventListener('click', function() {
  // votre code ici
});
```

## Consigne : 

Une simple condition qui vérifie la valeur de « document.getElementById('input').type » et la change en fonction du résultat devrait suffire !

## Bonus : 

- Le texte Show / Hide dans la span qui a l'id « display » se remplace lorsqu'on clique sur la checkbox, si le mot de passe est caché, il indique « show », sinon, il indique « hide » ;
- Reproduisez le comportement courant suivant lequel il faut maintenir le clic pour voir le mot de passe, et il disparaît dès qu'on relâche. 