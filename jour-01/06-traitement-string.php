<?php
// concatenation = addition plusieurs textes 

// EXEMPLE 1
$prenom = "Alain" ;
$nom = "DOE" ; 
$phrase = "$prenom $nom découvre le PHP <br>" ; // variable $phrase qui réutilise les variables $prenom $nom                                                
echo $phrase ; // écrit la phrase en html 
// On ajoute <br> pour le saut de ligne car echo ne le met pas
// ensuite pour l'executer dans mon navigateur ===> http://localhost:8080/php-initiation/jour-01/06-traitement-string.php



// EXEMPLE 2
$phrase2 = "{$prenom} {$nom} découvre le php <br>" ; // on utilise les accolades pour rendre + lisible 
echo $phrase2 ; 



// EXEMPLE 3
$phrase3 = $prenom . " " . $nom . " decouvre le PHP <br>" ; // on utilise cette synthaxe car + efficace pour les grosse repetitions
echo $phrase3 ;



// EXEMPLE 4
// Ecrire la phrase suivante dans le navigateur : 
// Victor Hugo a dit "Vive les Misérables"
// carractere d'échappement 

$parole = "Victor Hugo a dit \"Vive les Misérables\"<br>";

// utilisation du symbole anti-slash devant les guillemets sert à interpreter comme des guillemets et non commdes la fin d'une string
// ===> http://localhost:8080/php-initiation/jour-01/06-traitement-string.php



// EXEMPLE 5 
$unTexte = "<div>bonjour , comment allez vous $prenom ? </div>" ;

echo $unTexte;

// avec les guillemets double => possible de sauter des lignes dans la valeur de la variable 
$phraseMultiligne = "hello les amis <br><br>

comment allez vous ? <br><br>

j'espere bien !";

echo $phraseMultiligne ; 

// EXEMPLE 6 - EXO 

// créer 3 variables : prenom Victor - nom Hugo - ville Paris 
// créer les 3 phrases suivantes : 
// Victor Hugo a vécu à Paris e 1800
// Victor a quitté Paris à la fin de sa carrière 
// Victor Hugo a écrit "Notre Dame de Paris"
// afficher ces 3 phrase dans le navigateur 
// faire le tout dans le fichier 07-exo.php




