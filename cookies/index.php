<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <form action="cookie.php" method="post">
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user" placeholder="Digite seu usuario">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if(isset($_COOKIE['user']))
        {
            $cookie = $_COOKIE['user'];
            echo "<h1> Seja bem vindo {$cookie} </h1>";
        }
        
    ?>
</body>
</html>