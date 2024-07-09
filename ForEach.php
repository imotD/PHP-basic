<?php

$names = ["Tommy", "Alhamra", "Eko"];

for($i = 0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach( $names as $name){
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Eko",
    "middle_name" => "Tommy",
    "last_name" => "Alhamra"
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

