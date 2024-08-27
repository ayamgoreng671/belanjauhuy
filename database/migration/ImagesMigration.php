<?php

require_once __DIR__ . "/Migration.php";
require_once __DIR__ . "/../../app/Database/GetConnection.php";

use Migration\MigrationImpl;

$connection = getConnection();

MigrationImpl::setName("images");
MigrationImpl::id();
MigrationImpl::string("name");
MigrationImpl::foreignId("products");
MigrationImpl::run($connection);
