<?php
    class Accessories extends Product {
        public $materials;
        public $dimension;

        public function __construct($image, $name, $animals, $materials, $dimension){
            parent::__construct($image, $name, $animals);
            $this->materials = $materials;
            $this->dimension = $dimension;
        }
    }
?>