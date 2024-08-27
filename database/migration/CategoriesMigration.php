<?php

require_once __DIR__ . "/Migration.php";
require_once __DIR__ . "/../../app/Database/GetConnection.php";

use Migration\MigrationImpl;

$connection = getConnection();

MigrationImpl::setName("categories");
MigrationImpl::id();
MigrationImpl::string("name");
MigrationImpl::string("slug");
MigrationImpl::string("image");
MigrationImpl::run($connection);
