<?php

require_once __DIR__ . "/Migration.php";
require_once __DIR__ . "/../../app/Database/GetConnection.php";

use Migration\MigrationImpl;

$connection = getConnection();

MigrationImpl::setName("ayam");
MigrationImpl::id();
MigrationImpl::string("naga");
MigrationImpl::string("hitam");
MigrationImpl::run($connection);



