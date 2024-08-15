<?php
    class Animal {
        public  $name, 
                $legs, 
                $cold_blooded ;

        public function __construct($name, $legs=4, $cold_blooded="no") {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
        }

        public function cetak_hewan() {
            echo "Name: $this->name <br>";
            echo "Legs: $this->legs <br>";
            echo "Cold Blooded: $this->cold_blooded <br>";
        }
    }
?>