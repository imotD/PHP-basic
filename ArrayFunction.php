<?php

$data = [1,2,3,4,5,6,7];

var_dump(array_map(fn($data) => $data * 2, $data));

rsort($data);
var_dump($data);
