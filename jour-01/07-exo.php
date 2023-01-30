<?php


// EXO string : 
// créer 3 variables : prenom Victor - nom Hugo - ville Paris 
// créer les 3 phrases suivantes : 
// Victor Hugo a vécu à Paris e 1800
// Victor a quitté Paris à la fin de sa carrière 
// Victor Hugo a écrit "Notre Dame de Paris"
// afficher ces 3 phrase dans le navigateur 

$nom = "Hugo" ;
$prenom = "Victor" ; 




$phrase1 = "<div>{$prenom} {$nom} a vécu à Paris e 1800</div>" ; 

$phrase2 = "<div> {$prenom} {$nom} a quitté Paris à la fin de sa carrière</div>" ;

$phrase3 = "<div> {$prenom} {$nom} a écrit \"Notre Dame de Paris\" </div>" ; 

echo $phrase1 ;

echo $phrase2 ;

echo $phrase3 ;

// http://localhost:8080/php-initiation/jour-01/07-exo.php



