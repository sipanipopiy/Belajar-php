<?php

echo 'Name : ';
echo 'Yanto Kamal Jalal';
echo "\n";

echo "Name : ";
echo "Yanto\t Kamal\t Jalal\n";

echo <<<Yanto
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

Yanto;

echo <<<'Yanto'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
Yanto;
