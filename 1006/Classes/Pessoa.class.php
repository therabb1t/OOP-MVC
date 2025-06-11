<?php
class Pessoa{
    public $Nome;
    public $Idade;

public function apresentar(): string {
        return "Olá, meu nome é {$this->Nome} e tenho {$this->Idade} anos!";
    }
}

?>