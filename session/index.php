<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="session.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuario">
        <br>
        <label for="senha">Senha:</label>
        <input type="text" name="senha" id="senha" placeholder="Digite sua senha">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>