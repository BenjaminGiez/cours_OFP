<?php
    class Utilisateur{
        private $user_name;
        private $user_pass;
//============================================
        /* CONSTRUCTEUR ▼ 
//============================================        
        ici, le php va rechercher cette méthode 
        lors de la création d'un nouvel objet et va 
        automatiquement l'executer si elle est 
        trouvée   ▼ ▼ */

        public function __construct($n, $p){
            $this->user_name = $n;
            $this->user_pass = $p;
        }
//============================================
        // ▼ DESTRUCTEUR ▼
//============================================
/*Ici, les variables-objets, comme n’importe 
quelle autre variable « classique », ne sont 
actives que durant le temps d’exécution du 
script puis sont ensuite détruites. la méthode 
destructeur va être appelée automatiquement par 
le PHP juste avant qu’un objet ne soit détruit.*/

        public function __destruct(){
            //Du code à exécuter
        }

        public function getNom(){
            return $this->user_name;
        }
    }