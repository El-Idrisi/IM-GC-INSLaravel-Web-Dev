<?php
require_once "animal.php";
require_once "ape.php";
require_once "frog.php";

$sheep = new Animal("Shaun");
$sheep->cetak_hewan();

echo "<br>";

$songokong = new Ape("Kera Sakti");
$songokong->cetak_hewan();
$songokong->yell();

echo "<br>";

$kodok = new Frog("Buduk");
$kodok->cetak_hewan();
$kodok->jump();
