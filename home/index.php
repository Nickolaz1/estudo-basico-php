<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>
<body>
    <h1>Hello World</h1>

    <?php
    echo "Meu nome é Nickolas <br>";
    echo "Bem-vindo ao meu sistema <br>";

    echo soma(4);  
    echo "<br>";

    laço(20); 
    echo "<br>";

    $frutas = array("laranja", "maracuja", "banana");
    print_r($frutas);
    ?>

    <?php
    function soma($num)
    {
        return $num + 10;
    }

    function laço($num)
    {
        for($i = 1; $i <= $num; $i++)
        {
            echo $i;
        }
    }
    ?>
</body>
</html>
