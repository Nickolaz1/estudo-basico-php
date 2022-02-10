<?php

$nome = htmlspecialchars($_POST["nome"]);
$idade = (int)$_POST["idade"];

echo "Seu nome é ".$nome." e tem ".$idade." anos <br>";

if($idade >= 18){
    echo "Você pode tirar carteira de motorista";
} else{
    echo "Você não pode tirar carteira de motorista";
}