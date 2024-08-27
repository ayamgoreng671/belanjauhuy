<?php

namespace Migration {

    use PDO;

    interface Migration
    {
        static function setName(string $tableName): void;
        static function id(): void;
        static function integer(string $column): void;
        static function string(string $column): void;
        static function text(string $column): void;
        static function bool(string $column): void;
        static function foreignId(string $column): void;

        static function run(\PDO $connection): void;
    }

    class MigrationImpl implements Migration
    {


        private static array $table = [];
        private static string $tableName = "";

        static function setName(string $tableName): void
        {
            self::$tableName = $tableName;
        }
        static function id(): void
        {
            self::$table[] = "id int(11) not null AUTO_INCREMENT PRIMARY KEY";
        }
        static function integer(string $column): void
        {
            self::$table[] = "$column int(100) not null";
        }

        static function string(string $column): void
        {
            self::$table[] = "$column varchar(255) not null";
        }
        static function text(string $column): void
        {
            self::$table[] = "$column text not null";
        }
        static function bool(string $column): void
        {

            self::$table[] = "$column bool not null";
        }

        static function foreignId(string $column): void
        {

            self::$table[] = $column . "_id int(11) not null, CONSTRAINT FK_" . self::$tableName . "_" . $column . " FOREIGN KEY (".$column."_id) REFERENCES " . $column . "(id)";
        }

        static function run(\PDO $connection): void
        {
            $query = "CREATE TABLE " . self::$tableName . "(" . implode(",", self::$table) . ")";
            $connection->exec($query);
            self::$table = [];
            $connection = null;
            var_dump($query);
            echo Self::$tableName." Table Migration Successful".PHP_EOL;
        }
    }

    class MigrationRollback
    {
        static function rollback(\PDO $connection): void
        {
            // $query = $connection->query("SELECT DATABASE()");
            // $databaseName = $query->fetchColumn();
            // $rollback = "SET FOREIGN_KEY_CHECKS = 0;

            // SELECT CONCAT('DROP TABLE IF EXISTS `', table_name, '`;')
            // FROM information_schema.tables
            // WHERE table_schema = '$databaseName';

            // SET FOREIGN_KEY_CHECKS = 1;";

            // $connection->exec();

          
            $connection->exec("SET FOREIGN_KEY_CHECKS = 0;");


            $query = $connection->query("SELECT CONCAT('DROP TABLE IF EXISTS `', table_name, '`;') AS drop_command 
                      FROM information_schema.tables 
                      WHERE table_schema = DATABASE();");

            $dropCommands = $query->fetchAll(PDO::FETCH_COLUMN);


            foreach ($dropCommands as $dropCommand) {
                $connection->exec($dropCommand);
            }


            $connection->exec("SET FOREIGN_KEY_CHECKS = 1;");

            $connection = null;

            echo "Database Rollback Successful". PHP_EOL;
        }
    }

}