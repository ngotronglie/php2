<?php 

class Motobike extends OnLaneAbstract implements VehicleInterface
{    
    public function ga() {
        echo "Motobike đang ga đấy!" . PHP_EOL;
    }

    public function move() {
        echo "Motobike đang di chuyển đấy!" . PHP_EOL;
    }

    public function bocDau() {
        echo "Motobike đang Bốc đầu đấy!" . PHP_EOL;
    }
}