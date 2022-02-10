<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <?php
        $nome = htmlspecialchars($_POST['name']);
        if($nome == "Nickolas"){
            echo "<h3>Ola ",$nome,"</h3>";
        } else{
            echo "Ola ", $nome;
        }
    ?>
    Você tem <?php echo (int)$_POST['age']; ?> anos.
</body>
</html>
