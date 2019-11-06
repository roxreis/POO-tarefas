<?php

include_once "Pessoas.php";
include_once "Funcionarios.php";

$pessoaUm = new Pessoas();
$pessoaUm->nome = "Vitor";
$pessoaUm->setIdade(23);

echo "<h1>".$pessoaUm->nome."<h1>";
echo "<h1>".$pessoaUm->getIdade()."<h1>";


$pessoaDois = new Pessoas();
$pessoaDois->nome = "Rodrigo";



$funcionarioUm = new Funcionarios();
$funcionarioUm->nome = "Ligia";     
$funcionarioUm->setIdade(22);

var_dump($funcionarioUm);