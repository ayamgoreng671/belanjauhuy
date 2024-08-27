<?php

namespace Controller{


require_once __DIR__. "/../Database/GetConnection.php";
require_once __DIR__. "/../View/View.php";

use View\View;

    class FrontController{
        public function index(){
            View::render("front/index");
        }
        public function detail(){
            // echo "ayamm";
            View::render("front/detail");
        }

        public function hello(): void{
            echo "HomeController.hello()";
        }
    
        public function world(): void{
            echo "HomeController.world()";
        }
    }

}