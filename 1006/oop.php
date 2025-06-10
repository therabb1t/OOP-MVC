<?php
include_once './Classes/Pessoa.class.php';
$pessoa = New Pessoa();
$pessoa->Nome = 'Ana';
$pessoa->Idade = 16;
echo $pessoa->apresentar();

include_once './Classes/Gato.class.php';
$gato = New Gato();
$gato->Cor = 'Rosa choque';
echo $gato->miar();
?>