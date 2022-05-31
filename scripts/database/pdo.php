<?php

function connectionDatabase($host, $dbname, $user, $pass){
    $conn = null;
    try{
        $conn = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
    } catch(PDOException $ex){
        echo $ex->getMessage();
    }
    return $conn;
}
