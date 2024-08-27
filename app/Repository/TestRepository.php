<?php

namespace Repository{

    use Model\Test;

    interface TestRepository{

        function insert(Test $test): Test;
        function findById(int $id): ?Test;
        function findAll(): Array;
        
        // function update(Test $test, $request): Test;

        // function delete(Test $test): void;
    }

    class TestRepositoryImpl implements TestRepository{
        public function __construct(private \PDO $connection){

        }

        function insert(Test $test): Test{
            $sql ="INSERT into tests(name,email) VALUES (?,?)";
            $result = $this->connection->prepare($sql);
            $result->execute([$test->getName(),$test->getEmail()]);

            $id = $this->connection->lastInsertId();
            $test->setId($id);

            return $test;
        }
        function findById(int $id): ?Test{
            $sql = "SELECT * FROM tests WHERE id = ?";
            $result = $this->connection->prepare($sql);
            $result->execute([$id]);

            if($row = $result->fetch()){
                return new Test(
                    id: $row["id"],
                    name: $row["name"],
                    email: $row["email"],
                );
            }else{
                return null;
            }

        }
        function findAll(): Array{

            $sql = "SELECT * FROM tests";
            $result = $this->connection->query($sql);
            
            $array = [];

            while($row = $result->fetch()){
                $array[] = new Test(
                    id: $row["id"],
                    name: $row["name"],
                    email: $row["email"],
                );
            }

            return $array;

        }
        
        // function update(Test $test, $request): Test{

        // }

        // function delete(Test $test): void{

        // }
    }
}