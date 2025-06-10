<?php
include_once './Classes/Pessoa.class.php';

$pessoa = New Pessoa();

$pessoa->Nome = 'Ana';
$pessoa->Idade = 16;

echo $pessoa->apresentar();
?>