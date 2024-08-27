<?php

require_once __DIR__ . "/Migration.php";
require_once __DIR__ . "/../../app/Database/GetConnection.php";

use Migration\MigrationImpl;

$connection = getConnection();

MigrationImpl::setName("products");
MigrationImpl::id();
MigrationImpl::string("name");
MigrationImpl::string("slug");
MigrationImpl::integer("stock");
MigrationImpl::text("description");
MigrationImpl::foreignId("categories");
MigrationImpl::run($connection);
