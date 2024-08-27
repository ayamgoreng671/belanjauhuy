<?php

namespace Seeder{
    interface Seeder{
        static function setName(string $tableName): void;
        static function add(array $data): void;
        static function run(\PDO $connection): void;
    }

    class SeederImpl implements Seeder{

        private static array $rows = [];

        private static string $tableName = "";

        static function setName(string $tableName): void
        {
            self::$tableName = $tableName;
        }

        static function add(array $data): void{
            Self::$rows[] = $data;
        }
        static function run(\PDO $connection): void{
            foreach(Self::$rows as $row){
                $keys = array_keys($row);
                $values = array_values($row);
                $sql = "INSERT into ".Self::$tableName."(".implode(",", $keys).") VALUES ('".implode("','", $values)."')";
                // var_dump($sql);
                $connection->exec($sql);

                

            }
            echo "Table ".Self::$tableName." Seeder succesful";
            $connection = null;
        }
    }


}