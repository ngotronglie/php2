<?php

echo "<pre>";

session_start();

$item = [
    'id' => 10,
    'name' => 'Thắm ngộ nghĩnh',
    'quantity' => 2,
    'price' => 2000,
];

$_SESSION['cart'][$item['id']] = $item;

print_r($_SESSION);

unset($_SESSION['cart'][$item['id']]);

print_r($_SESSION);

// session_destroy();
$_SESSION = [];
print_r($_SESSION);
