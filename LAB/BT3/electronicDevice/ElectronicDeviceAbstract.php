<?php 
    // Định nghĩa abstract class chung cho việc quản lý pin và kích thước màn hình
    abstract class electronicDeviceAbstract implements electronicDeviceInterface {
        protected $trangThai; 
        protected $mucPin; // Cho những thiết bị có pin
        protected $kichThuocManHinh;   // Cho những thiết bị có màn hình

        public function __construct() {
            $this->trangThai = false;
        }

        public function turnOn() {
            $this->trangThai = true;
        }

        public function turnOff() {
            $this->trangThai = false;
        }

        abstract public function getPowerUsage(); // Phương thức abstract để lấy thông tin công suất

        public function displayInfo() {
            echo "trạng thái: " . ($this->trangThai ? "Thiết bị đang bật" : "Thiết bị đang tắt") . PHP_EOL;

            if (isset($this->mucPin)) {
                echo "mức pin: " . $this->mucPin . "%" . PHP_EOL;
            }

            if (isset($this->kichThuocManHinh)) {
                echo "kích thước màn hình: " . $this->kichThuocManHinh . " cm" . PHP_EOL;
            }
        }
    }


?>