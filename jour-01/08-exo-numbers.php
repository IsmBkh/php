<?php 
$a = 10 ; 
$b = 30 ; 

echo $a + $b . "<br>" ; // addition 
echo $a - $b . "<br>" ; // soustraction
echo $a * $b . "<br>" ; // multiplication 
echo $a / $b . "<br>" ; // division 
echo $a ** $b . "<br>" ; // puissance
echo $a % $b . "<br>" ; // modulo 

//  http://localhost:8080/php-initiation/jour-01/08-exo-numbers.php

$animaux = "12 vaches" ;
$prix = "500 euros";
$total = @($animaux * $prix) . "<br>" ; 
echo $total ; 

// @traitement => permet d'éviter d'afficher les warnings à l'écran 