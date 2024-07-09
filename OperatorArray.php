<?php

// UNION
$first = [
    "first_name" => "Tom",
    "last_name" => "Kiana"
];

$last = [
    "last_name" => "Kiana",
    "first_name" => "Tom"
];

$union = $first + $last;

var_dump($union);


$equality = $first == $last;
$identity = $first === $last;
var_dump($equality);
var_dump($identity);