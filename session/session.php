<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == "Nickolas" && $senha == "1234"){
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header("Location: privado.php");
} else{
    header("Location: index.php");
}