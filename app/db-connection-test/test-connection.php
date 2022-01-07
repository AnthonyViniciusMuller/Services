<?php

$host     = "data-base";  
$user     = "root";
$password = "password";
$dbname   = "teste";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Connection is okay";
}catch(PDOException $e)
{
    echo $e->getMessage();                         
}

?>