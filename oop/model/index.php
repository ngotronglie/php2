<?php 
    require_once './model.php';
    require_once './Product.php';
    $product = new product();
    $data = $product->getAll();
    echo '<pre>';

    print_r($data);


?>