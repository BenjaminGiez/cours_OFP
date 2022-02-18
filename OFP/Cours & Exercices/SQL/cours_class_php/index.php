<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Classes php</title>
</head>
<body>
    <h1>Exercice POO</h1>

    <!-- FORMULAIRE HTML

    <form action='index.php' method='post'>
            <label for='nom'>Nom d'utilisateur : </label>
            <input type='text' name='nom' id='nom'><br>
            <label for='pass'>Choisissez un mot de passe.</label>
            <input type='password' name='pass' id='pass'><br>
            <input type='submit' value='Envoyer'>
        </form>
-->

    <?php
/*        require 'utilisateur.class.php';
            //+ Vérification des données reçues (regex + filtres)
            //+ Stockage des données (base de données)
            $pierre = new Utilisateur($_POST['nom'], $_POST['pass']);
            echo $pierre->getNom(). '<br>';
*/        
//===============================================
require 'utilisateur.class.php';
        $pierre = new Utilisateur('Pierre', 'chaussette');
        $mathilde = new Utilisateur('Math', '123456');
        
        echo $pierre->getNom() . '<br>';
        echo $mathilde->getNom() . '<br>';
//===============================================
/*Lors de l’instanciation de notre classe Utilisateur, le PHP va automatiquement rechercher une méthode __construct() dans la classe à instancier et exécuter cette méthode si elle est trouvée. Les arguments passés lors de l’instanciation vont être utilisés dans notre constructeur et vont ici être stockés dans $user_name et $user_pass. */


    ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu risus rhoncus, convallis ex at, faucibus elit. Vivamus mattis ornare nisi non porta. Vestibulum ac sem vitae diam tristique bibendum. Mauris felis quam, rhoncus eu sollicitudin ut, laoreet vel tortor. Praesent molestie leo sit amet elit pharetra, at rhoncus lectus molestie. Sed eleifend ut leo et efficitur. Sed pretium lacinia pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris feugiat dignissim ipsum in varius. Donec mollis est at tortor luctus hendrerit. Integer vulputate lorem vitae orci luctus, sit amet gravida eros aliquam. Maecenas ipsum turpis, aliquet vel dui in, vehicula aliquam ligula.

</p>
</body>
</html>