<?php

namespace App\Controller\Pages;

class Home
{
    public static function home(){
        echo "Hello World";
    } 

    public function soma($num1, $num2){
        return $num1 + $num2;
    }
}