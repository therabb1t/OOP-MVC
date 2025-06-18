<?php
include_once './Classes/Animal.class.php';
class Gato extends Animal{

    public function miar(){
        $animal = new Animal();
        $animal->nome = "Bakunin";
        return $animal->nome." está miando.";
}
    public function dormir(){
    return "<br>Dormindo";
}
    public function comer(){
        return "<br>Comendo";
}
}
?>