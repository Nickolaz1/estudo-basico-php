<?php

class Carro
{
    public $modelo;
    public $marca;
    public $cor;
    public $valor;

    public function __construct($modelo, $marca, $cor, $valor)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->valor = $valor;
    }
 
}