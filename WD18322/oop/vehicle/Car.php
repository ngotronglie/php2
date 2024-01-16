<?php 

class Car extends OnLaneAbstract implements VehicleInterface
{    
    public function ga() {
        echo "Ô tô đang ga đấy!" . PHP_EOL;
    }

    public function move() {
        echo "Ô tô đang di chuyển đấy!" . PHP_EOL;
    }
}