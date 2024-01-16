<?php 
// include phai tuan tu 
    require_once './vehicleInterface.php';
    require_once './onLaneAbstract.php';
    require_once './onRiverAbstract.php';
    require_once './motobike.php';
    require_once './car.php';
    echo '<pre>';


    $car = new car();
    $car-> name = "mec";
    $car -> ga();
    $car -> move();
    print_r($car);

    
    $motobike = new motobike();
    $motobike-> name = "motobike xịn";
    $motobike -> ga();
    $motobike -> move();
    print_r($motobike);

?>
