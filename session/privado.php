<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina privada</title>
</head>
<body>
    <?php
        include_once('valida-session.php');
    ?>
    <h1>Seja bem vindo a pagina privada <?php echo $_SESSION['usuario']; ?></h1>
    <a href="logout.php">Fazer logout</a>
</body>
</html>