# [Défi] Animer un titre
## Objectif : 

Réaliser un effet d'actualisation d'un message.

## Cadre de travail :

Créez un fichier « index.html » avec le contenu suivant : 

```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animate Title</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <div class="container">
      <div class="image-wrapper left"></div>
      <hr>
      <h1 id="title">Salut !</h1>
      <div class="image-wrapper right"></div>
    </div>

    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
```

Créez ensuite un fichier « main.css » (si vous ne connaissez pas encore les keyframes, c'est le moment de vous pencher dessus) :

```css
* {
    padding: 0;
    margin: 0;
}

.container {
    width: 100vw;
    height: 100vh;
    display: flex;
}

.image-wrapper {
    width: 50%;
    height: 100%;
    background-size: cover;
    position: absolute;
}

.left {
    background-image: url('left.jpg');
    background-position: right;
    z-index: 4;
}

.right {
    background-image: url('right.jpg');
    background-position: left;
    left: 50%;
    z-index: 1;
}

hr {
    height: 180px;
    border: none;
    border-left: solid 10px #76a89d;
    position: absolute;
    z-index: 4;
    left: 50%;
    top: 50%;
    transform: translate(-48%, -48%)
}

#title {
    font-size: 3rem;
    text-align: center;
    position: absolute;
    z-index: 2;
    left: 50%;
    top: 50%;
    margin-left: 2rem;
    transform: translate(-120%, -56%);
    animation: showTitle 3s infinite ;
}

@keyframes showTitle {
    0% {
        transform: translate(-120%, -56%)
    }
    15% {
        transform: translate(0%, -56%)
    }
    80% {
        transform: translate(0%, -56%)
    }
    94% {
        transform: translate(-120%, -56%)
    }
    100% {
        transform: translate(-120%, -56%)
    }
}

@media screen and (max-width: 600px) {
    hr {
        height: 136px;
    }

    .title {
        font-size: 2rem
    }
}
```

Dans le fichier main.css, vous constaterez qu'il y a des *z-index*, l'idée, c'est que l'écran est divisé en deux parties égales qui contiennent chacune une image. Le texte passe sous celle de gauche en disparaissant, et se superpose à celle de droite pour réapparaître.

Créez enfin un fichier « main.js » :
```javascript
const title = document.getElementById('title');
function changeTitle() {
     // Votre code ici
}

setInterval(changeTitle, 3000);
```

## Consigne : 

En réalité, le javascript n'est pas très compliqué, c'est les keyframes dans le css qui gèrent la fluidité de l'animation. Il suffit de remplacer le texte dans le HTML, on peut le faire avec switch mais aussi avec une variable compteur qu'on incrémente et des if/else. Plutôt que innerHTML, vous pouvez utiliser innerText pour modifier le texte.