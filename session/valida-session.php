<?php

session_start();
if($_SESSION['usuario'] != "Nickolas" || $_SESSION['senha'] != "1234"){
    header("Location: index.php");
}