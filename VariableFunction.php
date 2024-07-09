<?php

function sayHello(string $name, $filter){

    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleName(string $name) :string
{
    return "Sample $name";
}

sayHello('Tommy', "sampleName");