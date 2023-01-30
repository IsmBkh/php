<?php 

// en js pour créer une variable on doit utiliser le mot clé let ou const ou var 
// Exemple : const a = 10 ; 

// en PHP pas de mot clé 
// on met simplement le symbole $devantLeNomDeLaVariable
$a = 10 ; 

// en js le ; final est facultatif 
// en PHP le ; en fin d'instruction est OBLIGATOIRE 
// un seul ; manquant dans la page => STOP erreur fatale 

$b=30 ; // les espaces avant et apres le symbole d'affectation sont facultatifs



// comme en JS on a 5 types de valeurs que l'on peut stocker dans une variable : 
// string => texte 

$c = "bonjour les amis" ; 
$d = 'comment allez vous ???' ; 


// numbers : integer / float

$e = 200 ; // integer 
$f = -500 ;

$g = 1.2 ; // float 
$h = -42.51 ; 


// Boolean 

$i = true ; 
$j = false ; 


// type de base ==> variable qui contien 1 valeur comme les exemple ci dessus 

// type complexe ==> variable qui stock plusieurs valeurs (Exemple : tableau , objet ..) 

$k = ["pomme", "poire" , "banane"] ; // tableau simple / tableau indexé (pareil de js)





// tableau associatifs qui n'existent pas en JS : 

$1 = ["nom" => "Alain" , "age" => 20 , "isAdmin" => true ] ; 

// Préférable de faire un retour à la ligne pour chaque valeurs pour que le tableau soit plus lisible 

$1 = [
"nom" => "Alain" ,
"age" => 20 , 
"isAdmin" => true 
] ; 

// DERNIER type de variable ==> Les objets 
// attention en PHP on a besoin de créer une class avant de créer un objet 
// pour crée un objet on utilise les accolades {}
// pour créer une calss idem 

class M{} // class 
$m = new M() ; // l'objet $m est OBLIGATOIRE issue de M 

-------------------------------


// En PHP on a un fichier nommer php. ini => fichier qui permet de modifier comment PHP fonctionne 
// il est possible via le fichier php. ini d'ajouter des fonctionnalités en + du langage PHP

// ===> module XDEBUG => équivalant de console.log chez JS 
// pas défaut ce module n'est pas installé dans XAMPP 
// il très interressant de l'installer dans notre XAMPP 

// MODE OPERATOIRE 
// https://webdevpro.net/xampp-visual-studio-et-le-module-php-xdebug/

// menu demarrer => modifier les variable => variable d'environnement => Sélectionner Path => modifier => écrire dans une nouvelle ligne ==> C:\xampp\php


---------------------------------

// On a ouvert la console de cmd en allant dans le path de notre dossier php initiation 
// CMD 
// php -v               ===> permet de connaitre notre version logiciel 
// php -i > phpinfo.txt ===> permet de connaitre tous les parametres logiciel sur l'ordi 
// Un dossier phpinfo.txt s'est créer directement dans notre dossier php-initiation 

// IMPORTANT 
// ===> On copie tous le contenu de PHPINFO.TXT 
// ===> On colle le tout dans ===>  https://xdebug.org/wizard ===>  il va nous donner les meilleurs parametres php pour notre ordi 
// ===> On a un fichier a télécharger ===> on le télécharge et colle dans le dossier ===> C:\xampp\php\ext


// ===> coller ça dans *php.ini : 
// ===>      [xDebug] 
//           zend_extension = C:\xampp\php\ext\php_xdebug.dll
//           xdebug.remote_enable = 1
//           xdebug.remote_autostart = On
//          
// ===> coller ça dans *php.ini ===> fichier qu'on ouvre à partir de la console XAMPP ===> config ===> PHP.ini
// ===> FIN => On vient de rajouter une extension a php ===> on a accès à de nouveau mots cléfs

// Petit bonus ===> On fait CRTL+F dans le fichier PHP.ini ===> html errors ===> enlever le point virgule qui figure avant ===> permet de faciliter la lecture des erreurs 


?>
