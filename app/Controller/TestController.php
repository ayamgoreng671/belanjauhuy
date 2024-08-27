<?php

namespace Controller{

require_once __DIR__. "/../Database/GetConnection.php";
require_once __DIR__. "/../Model/Test.php";
require_once __DIR__. "/../Repository/TestRepository.php";
require_once __DIR__. "/../View/View.php";

use Model\Test;
use Repository\TestRepositoryImpl;
use View\View;

    class TestController{

        public function index(){
            View::render("tests/index");
        }
        public function create(){
            $connection = getConnection();
            $repository = new TestRepositoryImpl($connection);

            $test = new Test(name: "ayam", email:"ayam@gmail.com");
            $newTest = $repository->insert($test);
            print_r($newTest);

            $connection = null;

        }

        public function findAll(){
            $connection = getConnection();
            $repository = new TestRepositoryImpl($connection);
            $result = $repository->findAll();
            print_r($result);

            $connection = null;

        }

        public function findId(int $id){
            $connection = getConnection();
            $repository = new TestRepositoryImpl($connection);
            $result = $repository->findById($id);
            print_r($result);

            $connection = null;

        }

        public function hello(): void{
            echo "HomeController.hello()";
        }
    
        public function world(): void{
            echo "HomeController.world()";
        }


    }
}