<?php 

    require_once './vehicleInterface.php';
    abstract class onLaneAbstract implements VehicleInterface{
        public string $name;
        abstract public function ga();

    }

?>