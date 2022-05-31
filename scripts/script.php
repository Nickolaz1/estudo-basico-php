<?php

error_reporting(E_ERROR);

include_once 'database/pdo.php';

function functionGenerator(){
    return [
        'somar' => function($v1, $v2){
            return $v1 + $v2;
        },
        'subtrair' => function($v1, $v2){
            return $v1 - $v2;
        } ,
        'multiplicar' => function($v1, $v2){
            return $v1 * $v2;
        },
        'dividir' => function($v1, $v2){
            return $v1 / $v2;
        }
    ];
}

function var_dump_pre($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function main(array $request){
    list($exe, $v1, $v2) = array_values($request);
    $functions = functionGenerator();
    if(is_null($functions[$exe])){
        return 'Tentativa de calculo incorreta';
    }
    $op = $functions[$exe];
    return $op($v1, $v2);
}
