<?php 
// http://localhost:8080/php-initiation/jour-01/09-boolean.php
$toto = false ; 
$titi = true ; 

$test1 = 50 > 10 ; // true

echo $test1 ; // 1 
var_dump($test1); // true 

$test2 = 50 < 10 ; // false
echo $test2; // rien aucune réponse 
var_dump($test2); // false 

// var_dump() est conseillé pour débugger les variables boolean 

// > < >= <= == != === !== (les même que JS)


$test3 = 0 === "10" ; // false
// vérif en valeur et type 
var_dump ($test3); 


$test4 = 10 ==="10" ; // true 
// vérifier la valeur et transtypage 
var_dump($test4) ;

// && || ! (les mêmes que JS)

$test5 = 10 > 30 || 20 < 30 ; 
//        false  ||  true
//        true 
var_dump($test5); // true

// => déconseille d'utiliser à la place de && => AND 
// => déconseille d'utiliser à la place de || => OR 

$test6 = (80 > 60 AND 12 < 11) ; // SI ON UTILISE AND ON MET PARENTHESES
//          true AND  false
//               true 
var_dump($test6);

