<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de carros</title>
</head>
<body>
    <h1>Nossos carros</h1>

    <?php
        include_once("carro.php");
        
        $carro = new Carro("Civic", "Honda", "Preto", 95000);
        $carro1 = new Carro("F8", "Ferrari", "Vermelho", 5500450);
        $carro2 = new Carro("Italia", "Porsche", "Preto", 2750500);
        $carro3 = new Carro("I8", "BMW", "Branco", 4200900);
        $carro4 = new Carro("Huracan", "Lamborghini", "Laranja", 7800450);

        $carros = array($carro, $carro1, $carro2, $carro3, $carro4);
  
        foreach($carros as $car)
        {
            echo $car->modelo . " ";
            echo $car->marca . " ";
            echo $car->cor . " ";
            echo $car->valor . "<br>";
        }
    ?>
</body>
</html>