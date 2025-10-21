<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hallo $finalName" . PHP_EOL;
}

sayHello("Yanto", "strtoupper");
sayHello("Yanto", "strtolower");
sayHello("Yanto", function (string $name): string {
    return strtoupper($name);
});
sayHello("Yanto", fn($name) => strtoupper($name));