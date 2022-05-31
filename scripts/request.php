<?php

require_once 'script.php';

$request = [
    'operation' => $_GET['operation'],
    'value1' => $_GET['value1'],
    'value2' => $_GET['value2'],
];

if(!in_array(null, $request))
    echo main($request);
else
    echo 'Valores nulos';
