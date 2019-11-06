<?php 


class Pessoas{

    public $nome = "Rodrigo";
    private $idade;
    protected $cpf;
    public $email;

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    private function falar(){
        echo "e ai";
    }

}