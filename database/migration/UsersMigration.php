<?php

require_once __DIR__ . "/Migration.php";
require_once __DIR__ . "/../../app/Database/GetConnection.php";

use Migration\MigrationImpl;

$connection = getConnection();

MigrationImpl::setName("users");
MigrationImpl::id();
MigrationImpl::string("username");
MigrationImpl::string("email");
MigrationImpl::string("password");
MigrationImpl::run($connection);
