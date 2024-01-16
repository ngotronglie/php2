<?php 
    class car extends onLaneAbstract implements vehicleInterface{ // implements => ho tro da ke thua
        public string $name; // can keo sang file thi moi keo thoi, khong thi van khong sao
        public function ga(){
            echo 'o to dang ga'. PHP_EOL;
        }
        public function move(){
            echo 'car going to move' . PHP_EOL;
        }
    }

?>