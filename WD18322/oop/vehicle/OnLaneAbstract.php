<?php 

require_once './VehicleInterface.php';

abstract class OnLaneAbstract
{
    public string $name;
    
    abstract public function ga();
}