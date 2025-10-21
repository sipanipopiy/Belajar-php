<?php

$first = [
    "first_name" => "Yanto"
];

$last = [
    "first_name" => "Siti",
    "last_name" => "Muriniah"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Yanto",
    "last_name" => "Kamal"
];

$b = [
    "last_name" => "Kamal",
    "first_name" => "Yanto"
];

var_dump($a == $b);
var_dump($a === $b);