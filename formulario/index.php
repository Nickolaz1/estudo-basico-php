<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <br>
        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade" placeholder="Digite sua idade">
        <br>
        <label for="signo">Signo:</label>
        <input type="text" name="signo" id="signo" placeholder="Digite sua signo">
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php

    include_once("pessoa.php");

    $nome = htmlspecialchars($_POST["nome"]);
    $idade = (int)$_POST["idade"];
    $signo = htmlspecialchars($_POST["signo"]);

    $pessoa = new Pessoa($nome, $idade, $signo);

    $pessoas = array($pessoa);

        foreach($pessoas as $p)
        {
            echo "Nome: ".$p->getNome()." ";
            echo "Idade: ".$p->getIdade()." ";
            echo "Signo: ".$p->getSigno()."<br>";
        }
    ?>
</body>
</html>