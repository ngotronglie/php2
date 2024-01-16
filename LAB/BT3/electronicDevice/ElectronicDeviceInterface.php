<?php 

    interface electronicDeviceInterface {
        public function turnOn();
        public function turnOff();
        public function getPowerUsage();
    }
?>