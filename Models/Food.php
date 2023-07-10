<?php
    class Food extends Product {
        public $weight;
        public $ingredients;

        public function __construct($image, $name, $animals, $weight, $ingredients){
            parent::__construct($image, $name, $animals);
            $this->weight = $weight;
            $this->ingredients = $ingredients;
        }
    };
?>