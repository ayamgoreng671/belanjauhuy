<?php

$migrations = [
    "Ayam",
    "Rawr",
    "Categories",
    "Users",
    "Products",
    "Images",
];

foreach ($migrations as $migration){
    require_once __DIR__ . "/".$migration."Migration.php";
}