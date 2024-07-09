<?php

$firstName = "Eko";
$lastName = "Tommy";

$sayHelloTom = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHelloTom();