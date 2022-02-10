<?php

include_once("pessoa.php");

$nome = htmlspecialchars($_POST["nome"]);
$idade = (int)$_POST["idade"];
$signo = htmlspecialchars($_POST["signo"]);

$pessoa = new Pessoa($nome, $idade, $signo);

$pessoas = array($pessoa);
