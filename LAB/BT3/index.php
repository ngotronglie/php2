<?php  
    require_once 'electronicDevice/ElectronicDeviceInterface.php';
    require_once 'electronicDevice/ElectronicDeviceAbstract.php';
    require_once 'electronicDevice/Laptop.php';
    require_once 'electronicDevice/Smartphone.php';
    require_once 'electronicDevice/Television.php';
    echo '<pre>';
    // Sử dụng các class đã triển khai
    $television = new Television(50, 100);
    $laptop = new Laptop(15.6, 50, 5000);
    $smartphone = new Smartphone(6.0, 10, 3000);

    $cacThietBi = [$television, $laptop, $smartphone];

    foreach ($cacThietBi as $thietbi) {
        $laptop->turnOn();
        $thietbi->displayInfo();
        echo "Sử dụng điện năng: " . $thietbi->getPowerUsage() . " W" . PHP_EOL;

        if ($thietbi instanceof Laptop || $thietbi instanceof Smartphone) {
            echo "Dung lượng pin: " . $thietbi->getBatteryCapacity() . " mAh" . PHP_EOL;
        }

        echo PHP_EOL;
    }

?>