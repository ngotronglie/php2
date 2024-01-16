<?php 
    // Triển khai class con Smartphone
    class Smartphone extends electronicDeviceAbstract implements electronicDeviceInterface{
        private $tieuThuDienNang;
        private $dungLuongPin;

        public function __construct($kichThuocManHinh, $tieuThuDienNang, $dungLuongPin) {
            parent::__construct();
            $this->kichThuocManHinh = $kichThuocManHinh;
            $this->tieuThuDienNang = $tieuThuDienNang;
            $this->dungLuongPin = $dungLuongPin;
        }

        public function getPowerUsage() {
            return $this->tieuThuDienNang;
        }

        public function getBatteryCapacity() {
            return $this->dungLuongPin;
        }
    }

?>