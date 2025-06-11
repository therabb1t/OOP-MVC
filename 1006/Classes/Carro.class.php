<?php
class Carro {
    public $Cor;
    public $Modelo;
    public $Ano;
    public $Potencia;
    public $Nome;
    public $Marca;
    public $Placa;
    public $Combustivel;

    public function acelerar(){
        return "<br><br>VROOOOOOOM";
    }
    public function andar($quant, $distancia){
        echo "<br>" .$this->Marca. " " .$this->Nome. " " .$this->Ano. " favor andar por {$quant} {$distancia}";  
    }
    public function abastecer(){
        echo "<br>" .$this->Marca. " " .$this->Nome. " Precisa abastecer!";
    }
    public function potencia(){
        return "<br>Sua potência é de " . $this->Potencia . " cavalos";
}
    public function posto($porcentagem){
        echo "<br>Posto de Gasolina informa: Cerca de {$porcentagem} de " .$this->Combustivel. " foi abastecido";
    }
    public function detran(){
        return "<br>Sua placa é " .$this->Placa;
    }
}
?>
