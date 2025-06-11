<?php
include_once './Classes/Pessoa.class.php';
include_once './Classes/Gato.class.php';
include_once './Classes/Carro.class.php';

$pessoa = New Pessoa();
$pessoa->Nome = 'Ana';
$pessoa->Idade = 16;
echo $pessoa->apresentar();

$gato = New Gato();
$gato->Cor = 'Rosa choque';
echo $gato->miar();

$carro = New Carro();
echo $carro->acelerar();
$carro->Marca = "Honda";
$carro->Nome = "Civic";
$carro->Ano = 2018;
$carro->andar(5,"Km");
echo $carro->abastecer();
$carro->posto("60%");
$carro->Combustivel = "Etanol";
$carro->Potencia = 173;
$carro->Placa = "ABC01234" ;
echo $carro->potencia();
echo $carro->detran();

?>