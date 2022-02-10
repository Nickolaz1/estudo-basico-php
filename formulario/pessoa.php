<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $signo;

    function __construct($nome, $idade, $signo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->signo = $signo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getSigno()
    {
        return $this->signo;
    }

    public function setSigno($signo)
    {
        $this->signo = $signo;
    }
}