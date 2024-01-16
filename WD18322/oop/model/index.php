<?php

require_once './Model.php';
require_once './Product.php';

$product = new Product();

$data = $product->getAll();

echo "<pre>";
print_r($data);