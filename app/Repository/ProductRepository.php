<?php

namespace Repository{

    use Model\Product;

    interface ProductRepository{

        function insert(Product $product): Product;
        function findById(int $id): ?Product;
        function findAll(): Array;
        
        // function update(Test $test, $request): Test;

        // function delete(Test $test): void;
    }

    class ProductRepositoryImpl implements ProductRepository{
        public function __construct(private \PDO $connection){

        }

        function insert(Product $product): Product{
            $sql ="INSERT into products(`name`, `slug`, `stock`, `description`, `categories_id`) VALUES (?,?,?,?,?)";
            $result = $this->connection->prepare($sql);
            $result->execute([$product->getName(),$product->getSlug(),$product->getStock(),$product->getDescription(),$product->getCategoryId()]);

            $id = $this->connection->lastInsertId();
            $product->setId($id);

            return $product;
        }
        function findById(int $id): ?Product{
            $sql = "SELECT * FROM products WHERE id = ?";
            $result = $this->connection->prepare($sql);
            $result->execute([$id]);

            if($row = $result->fetch()){
                return new Product(
                    id: $row["id"],
                    name: $row["name"],
                    slug: $row["slug"],
                    stock: $row["stock"],
                    description: $row["description"],
                    categoryId: $row["categories_id"],
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
                $array[] = new Product(
                    id: $row["id"],
                    name: $row["name"],
                    slug: $row["slug"],
                    stock: $row["stock"],
                    description: $row["description"],
                    categoryId: $row["categories_id"],
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