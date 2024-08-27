<?php

namespace Repository{

    use Model\Category;

    interface CategoryRepository{

        function insert(Category $category): Category;
        function findById(int $id): ?Category;
        function findAll(): Array;
        
        // function update(Test $test, $request): Test;

        // function delete(Test $test): void;
    }

    class CategoryRepositoryImpl implements CategoryRepository{
        public function __construct(private \PDO $connection){

        }

        function insert(Category $category): Category{
            $sql ="INSERT into categories(`name`, `slug`, `image`) VALUES (?,?,?)";
            $result = $this->connection->prepare($sql);
            $result->execute([$category->getName(),$category->getSlug(),$category->getImage()]);

            $id = $this->connection->lastInsertId();
            $category->setId($id);

            return $category;
        }
        function findById(int $id): ?Category{
            $sql = "SELECT * FROM categories WHERE id = ?";
            $result = $this->connection->prepare($sql);
            $result->execute([$id]);

            if($row = $result->fetch()){
                return new Category(
                    id: $row["id"],
                    name: $row["name"],
                    slug: $row["slug"],
                    image: $row["image"]
                );
            }else{
                return null;
            }

        }
        function findAll(): Array{

            $sql = "SELECT * FROM products";
            $result = $this->connection->query($sql);
            
            $array = [];

            while($row = $result->fetch()){
                $array[] = new Category(
                    id: $row["id"],
                    name: $row["name"],
                    slug: $row["slug"],
                    image: $row["image"]
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