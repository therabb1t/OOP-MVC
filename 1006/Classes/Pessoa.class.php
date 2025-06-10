<?php
class Pessoa{
    public $Nome;
    public $Idade;

public function apresentar(): string {
        return "Socorro, meu nome é {$this->Nome} e tenho {$this->Idade} anos";
    }
}

?>