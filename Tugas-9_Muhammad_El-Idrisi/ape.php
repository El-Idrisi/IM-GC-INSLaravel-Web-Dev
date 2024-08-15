<?php
    require_once "animal.php";

    class Ape extends Animal{
        public function __construct($name, $legs=2, $cold_blooded="no")
        {
            parent::__construct($name,$legs, $cold_blooded);
            
        }
        public function yell() {
            echo "Yell: Auooo! <br>";
        }
    }
?>