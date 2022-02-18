
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Morpion</title>
</head>
<body>
    <h1>Morpion</h1>
    <section class="container">

    <section id="jeu">
        <div data-index="0" class="case"></div>
        <div data-index="1" class="case"></div>
        <div data-index="2" class="case"></div>
        <div data-index="3" class="case"></div>
        <div data-index="4" class="case"></div>
        <div data-index="5" class="case"></div>
        <div data-index="6" class="case"></div>
        <div data-index="7" class="case"></div>
        <div data-index="8" class="case"></div>


    </section>






    <section class="container">
	<p id="player">Le joueur <?php echo $_SESSION['auJoueur']; ?> doit jouer</p>
		<div class="tg-wrap">
		<table class="tg">
<tr>
    <th class="tg-031e"><a href="?case=1#"><?php if($_SESSION['grille'][0] == 1) echo '<img src="img/red-crosscross.png" alt="Croix">'; elseif($_SESSION['grille'][0] == 2) echo '<img src="img/green-circle.png" alt="Rond">'; else echo " "; ?></a></th>
    <th class="tg-031e"><a href="?case=2#"><?php if($_SESSION['grille'][1] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][1] == 2) echo '<img src="img/green-circle.png" alt="Rond">'; else echo " "; ?></a></th>
    <th class="tg-031e"><a href="?case=3#"><?php if($_SESSION['grille'][2] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][2] == 2) echo '<img src="img/green-circle.png" alt="Rond">'; else echo " "; ?></a></th>
</tr>
<tr>
    <td class="tg-031e"><a href="?case=4#"><?php if($_SESSION['grille'][3] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][3] == 2) echo '<img src="img/grenn-circle.png" alt="Rond">'; else echo " "; ?></a></td>
    <td class="tg-031e"><a href="?case=5#"><?php if($_SESSION['grille'][4] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][4] == 2) echo '<img src="img/grenn-circle.png" alt="Rond">'; else echo " "; ?></a></td>
    <td class="tg-031e"><a href="?case=6#"><?php if($_SESSION['grille'][5] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][5] == 2) echo '<img src="img/grenn-circle.png" alt="Rond">'; else echo " "; ?></a></td>
</tr>
<tr>
    <td class="tg-031e"><a href="?case=7#"><?php if($_SESSION['grille'][6] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][6] == 2) echo '<img src="img/grenn-circle.png" alt="Rond">'; else echo " "; ?></a></td>
    <td class="tg-031e"><a href="?case=8#"><?php if($_SESSION['grille'][7] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][7] == 2) echo '<img src="img/grenn-circle.png" alt="Rond">'; else echo " "; ?></a></td>
    <td class="tg-031e"><a href="?case=9#"><?php if($_SESSION['grille'][8] == 1) echo '<img src="img/red-cross.png" alt="Croix">'; elseif($_SESSION['grille'][8] == 2) echo '<img src="img/grenn-circle.png" alt="Rond">'; else echo " "; ?></a></td>
</tr>
</table>
</div>
<div class="reset"><a href="?case=reset">Réinitialiser la partie</a></div>
<p id="player">Le joueur <?php echo $_SESSION['auJoueur']; ?> doit jouer</p>

<div class="score">
	<h1>Score</h1>
	<p>Joueur 1 (croix) : <?php echo $_SESSION['scoreJ1']; ?></p> 
	<p>Joueur 2 (rond) : <?php echo $_SESSION['scoreJ2']; ?></p>
	<p class="draw"><?php if(!empty($matchNul)) echo $matchNul; ?></p>
</div>
<?php

                                    // Création de la grille de neuf cases
$_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);

                                    // Peut être aussi matérialisé de cette façon
$_SESSION['grille'] = array(
0,0,0,
0,0,0,
0,0,0);


$_SESSION['scoreJ1'] = 0;
$_SESSION['scoreJ2'] = 0;
$_SESSION['auJoueur'] = 1;

                                    // Pour faciliter la lecture de notre programme on créé les variables de joueurs 
$j1 = 1;
$j2 = 2;

                                    // Il ne faut pas oublier de faire le test pour la grille
if(empty($_SESSION['grille']))
		$_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);

                                    // Puis on fait les tests pour les joueurs
if(empty($_SESSION['scoreJ1']))
		$_SESSION['scoreJ1'] = 0;

if(empty($_SESSION['scoreJ2']))
		$_SESSION['scoreJ2'] = 0;

if(empty($_SESSION['auJoueur']))
		$_SESSION['auJoueur'] = 1;

                                    // On récupère la valeur de GET si ce n'est pas vide
if(!empty($_GET['case'])){
	// On récupère la case jouée et on la décrémente pour que cela corresponde avec notre tableau (array). Il ne faut pas oublier que les array commencent leur valeur à 0.
	$leJoueurJoueLaCase = $_GET['case'] - 1;

	                                // On test si la case est égale à 0
	if($_SESSION['grille'][$leJoueurJoueLaCase] == 0){
		                            // la case est libre, on peut y placer le pion
		$_SESSION['grille'][$leJoueurJoueLaCase] = $_SESSION['auJoueur'];
	}

}
// Le principe étant de tester toutes les possibilités grâce à des conditions.
if(
	($_SESSION['grille'][0] == $_SESSION['grille'][1]) && 
	($_SESSION['grille'][1] == $_SESSION['grille'][2]) && 
	($_SESSION['grille'][2] == $auJoueur)){
		++$_SESSION[$score];

		// Réinitialise
		$_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);
		$_SESSION['auJoueur'] = 1;
	} elseif(
	($_SESSION['grille'][3] == $_SESSION['grille'][4]) && 
	($_SESSION['grille'][4] == $_SESSION['grille'][5]) && 
	($_SESSION['grille'][5] == $auJoueur)){
		++$_SESSION[$score];
		
		// Réinitialise
		$_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);
		$_SESSION['auJoueur'] = 1;
	}
    if($_GET['case'] == "reset"){
        $_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);
    }



?>




</body>
</html>