<?php 
    echo '<pre>';
    session_start();
    print_r($_SESSION);

    $item =[
        'id' => 10,
        'name' => 'ngo trong liem',
        'quantity' => 3,
        'price' => 5000000,
    ];
    echo $item['name'];
    $_SESSION['cart'][$item['id']] = $item;
    print_r($_SESSION);
    unset($_SESSION['cart'][$item['id']]);
    print_r($_SESSION);

?>