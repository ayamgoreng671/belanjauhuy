<?php

namespace View{

    class View{
        public static function render(string $view, $model = []){
            require __DIR__ . "/../../views/".$view.".php";
            // require __DIR__ . "/../../views/front/detail.php";
        }
    }
}