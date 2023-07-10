<?php
    class Product {
        public $image;
        public $name;
        public $animals;
        private $prize;

        public function __construct($image, $name, $animals){
            $this->image = $image;
            $this->name = $name;
            $this->animals = $animals;
        }
        public function setPrize($prize){
            $this->prize = $prize;
        }
        public function getPrize(){
            return $this->prize;
        }
    }
?>