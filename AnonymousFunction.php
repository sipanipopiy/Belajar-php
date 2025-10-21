<?php

$sayHello = function (string $name) {
    echo "Hallo $name" . PHP_EOL;
};

$sayHello("Siti");
$sayHello("Yanto");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Siti", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Yanto", $filterFunction);

$firstName = "Siti";
$lastName = "Muriniah";

$sayHelloYanto = function () use ($firstName, $lastName) {
    echo "Hallo $firstName $lastName" . PHP_EOL;
};
$sayHelloYanto();

$firstName = "Yanto";
$lastName = "Kamal";
$sayHelloYanto();
