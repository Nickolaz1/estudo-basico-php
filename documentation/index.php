<?php

$idade = 18;

// SOBRE CONSTANTES

// forma antiga
define("NOME", "Nickolas");
const NOME_COMPLETO = "Nickolas Alexandre";

echo NOME_COMPLETO . "<br>";

// verificar se existe e esta definida a constante
if(defined('NOME')){
    // retorna o valor de uma constante
    echo constant('NOME') . "<br>";
}

// verificar se a variavel existe
if(isset($idade)){
    echo $idade . "<br>";
}

// SOBRE ARRAYS

$uva = "Uva";

// duas formas de criar array
$frutas = array("Banana", "Laranja", "Limão", "Pera");
$frutas = ["Banana", "Laranja", "Limão", "Pera", $uva, 1];

foreach($frutas as $fruta){
    echo "{$fruta} <br>";
}

// apaga as posições referentes do array
unset($frutas[5], $frutas[4]);

foreach($frutas as $fruta){
    echo "{$fruta} <br>";
}

// apaga todo o array
unset($frutas);

// array com chave especificada
$pessoas = [
    1 => "Nickolas",
    2 => "Samara",
    3 => "Sandra",
    4 => "Nilson",
];

var_dump($pessoas);
echo "<br>";



