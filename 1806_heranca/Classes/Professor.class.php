<?php
include_once './Classes/Pessoa.class.php';
class Professor extends Pessoa{

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