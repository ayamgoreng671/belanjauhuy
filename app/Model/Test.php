<?php


namespace Model {
    class Test
    {
        public function __construct(
            private ?int $id = null,
            private ?string $name = null,
            private ?string $email = null
        ) {
  
        }

        public function getId(){
            return $this->id;
        }

        public function setId(?int $id){
            $this->id = $id;
        }
        
        public function getName(){
            return $this->name;
        }

        public function setName(?string $name){
            $this->name = $name;
        }
        
        public function getEmail(){
            return $this->email;
        }

        
        public function setEmail(?string $email){
            $this->email = $email;
        }
    }
}