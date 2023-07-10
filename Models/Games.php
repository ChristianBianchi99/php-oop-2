<?php
    class Games extends Product {
        public $characteristics;
        public $dimension;

        public function __construct($image, $name, $animals, $characteristics, $dimension){
            parent::__construct($image, $name, $animals);
            $this->characteristics = $characteristics;
            $this->dimension = $dimension;
        }
    }
?>