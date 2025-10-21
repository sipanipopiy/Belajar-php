<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Yanto", "Kamal", "Halal"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Siti";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Jamal";
var_dump($names);

var_dump(count($names));

$yanto = array(
    "id" => "yanto",
    "name" => "Yanto Kamal",
    "age" => 25,
    "address" => array(
        "city" => "Batam",
        "country" => "Indonesia"
    )
);
var_dump($yanto);

var_dump($yanto["name"]);
var_dump($yanto["address"]["country"]);

$siti = [
    "id" => "siti",
    "name" => "Siti Muriniah",
    "age" => 20,
    "address" => [
        "city" => "Bandung",
        "country" => "Indonesia"
    ]
];
var_dump($siti);