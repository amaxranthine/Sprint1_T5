
<?php
// Definición de la clase abstracta Animal 
abstract class Animal {
    private $name;

// Constructor
public function __construct($name){
    $this->name = $name;
}
// metodo nombre del animal: get
public function getName() {
    return $this->name;
}
// Método setter para el nombre del animal


abstract public function makeSound();


}



?>