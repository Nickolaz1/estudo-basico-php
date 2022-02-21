<?php

    require 'vendor/autoload.php';

    use App\Controller\Pages\Home;

    Home::home();

    echo "<br>";

    $home = new Home();
    echo $home->soma(5, 7);