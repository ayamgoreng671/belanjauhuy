<?php

require_once __DIR__ . "/Seeder.php";
require_once __DIR__ . "/../../app/Database/GetConnection.php";

use Seeder\Seederimpl;

$connection = getConnection();

SeederImpl::setName("users");
SeederImpl::add([
    "username" => "Ayam Goreng",
    "email" => "ayam@gmail.com",
    "password" => md5("ayam1234"),
]);
SeederImpl::add([
    "username" => "Bebek Bakar",
    "email" => "bebek@gmail.com",
    "password" => md5("bebek1234"),
]);
Seederimpl::run($connection);