<?php
// CLASSE
class Pessoa{
    // ATRIBUTOS
    public $Nome;
    public $DataNasc;
    public $Olhos;
    public $CPF;
 
    // MÉTODOS
    function Andar($quant,$distancia){
        echo $this->Nome." favor andar por {$quant} {$distancia}";  
    }
    function Dormir($tempo){
        echo $this->Olhos. " favor fechar por {$tempo}";
    }
}
?> 