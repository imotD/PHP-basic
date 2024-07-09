<?php

function sayHello()
{
    echo "Hello World" . PHP_EOL;
}

sayHello();


function sumAll(...$values)
{
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }

    echo " Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10,20,30,40);

function testHello(string $firstname, string $lastname) :string
 {
    return "Hi, $firstname $lastname";
}