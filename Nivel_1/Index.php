/*Necessitem crear un tipus de dades que representi un animal. 
Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() 
que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).*/
<?php
require_once "Animal.php";
require_once "Gato.php";
require_once "Perro.php";


$perro = new Perro("Max");
echo $perro -> getName() . "dice: " . $perro -> makeSound() .  "\n" ;

$gato = new Gato("Neo");
echo $gato -> getName() . "dice: " . $gato -> makeSound();


?>