
<?php
// Definición de la clase abstracta Animal 
abstract class Animal {
    public $name;

// Constructor
public function __construct($name){
    $this->name = $name;
}
// metodo nombre del animal: get
public function getName() {
    return $this->name;
}
// Método setter para el nombre del animal
public function setName($name) {
    $this->name = $name;
}



}



?>