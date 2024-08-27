<?php

require_once __DIR__ . "/Migration.php";
require_once __DIR__ . "/../../app/Database/GetConnection.php";

use Migration\MigrationImpl;

$connection = getConnection();

MigrationImpl::setName("rawr");
MigrationImpl::id();
MigrationImpl::string("ayam");
MigrationImpl::string("bebek");
MigrationImpl::foreignId("ayam");
MigrationImpl::run($connection);
