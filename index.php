<?php


$text = "My first php site!!!";


try{
    $db = new PDO('mysql:host=localhost;dbname=phplearn', 'bduser', 'password');
} catch (Exception $ex) {
    die(var_dump($ex));
}


require "index.view.php";

