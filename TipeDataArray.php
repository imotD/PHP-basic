<?php

$value = array(1,2,3,4);
var_dump($value);

$value2 = ["Eko", "Kurniawan", "Khannedy"];
var_dump($value2);

echo $value[0];
echo "\n";

echo $value2[2];

echo "\n";

echo $value[0] = 9;
var_dump($value);

echo "\n";

$value2[] = "Tommy";
var_dump($value2);

unset($value2[1]);
var_dump($value2);

var_dump(count($value2));
echo "\n";

$car = array(
    0 => "Toyota",
    1 => "Mitsubisi",
    "id" => "Honda"
);

var_dump($car);

var_dump($car["id"]);

$mahasiswa = [
    "nim" => 12333,
     "name" => "Tommy",
     "address" => [
        "city" => "Pandeglang",
        "zip" => 42211
     ]
];

var_dump($mahasiswa["address"]["city"]);

var_dump($mahasiswa);

