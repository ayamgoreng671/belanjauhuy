<?php

function getConnection(){
    
$host = "localhost";
$port = "3306";
$database = "belanjauhuy";
$username = "root";
$password = "";


return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}