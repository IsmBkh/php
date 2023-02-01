<?php 

// boucle fonctionne même manière que sur javascript 

// dans les parenthèses de for 
// $i = 0 ; incrément 
// $i < 3 ; condition de sortie de bouble 
// $i++ ; augmente le i de +1 la variable $i et de stocker le resultat du calcul dans lui même (opérateur unaire)

for ($i = 0 ; $i < 31000 ; $i++){

}

// Spécifique à PHP  :

?>

<?php
for($i = 0 ; $i < 1000 ; $i++) : ?> On repete 1000 infos 
        <h1><?php echo $i ?></h1>   Affichez le résultat en revenant à la ligne a chaque fois 
<?php endfor ?>

<?php
// Très pratqiue lorsqu'on veut mixé du HTML et des boucles / conditions 
// autre manière de le faire : (moins pratique pour mixé html php)

for ($i = 0 ; $i < 1000 ; $i++){
    echo "<h1>$i</h1>";
}
?>

http://localhost:8080/php-initiation/jour-01/11-boucle.php