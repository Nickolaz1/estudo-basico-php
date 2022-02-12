<?php

header("Location: index.php");

$value = $_POST["user"];

setcookie('user', $value, time() + (60*5));
