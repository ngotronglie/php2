<?php 
    // Triển khai class con Television
    class television extends electronicDeviceAbstract implements electronicDeviceInterface{
        private $tieuThuDienNang;

        public function __construct($kichThuocManHinh, $tieuThuDienNang) {
            parent::__construct();
            $this->kichThuocManHinh = $kichThuocManHinh;
            $this->tieuThuDienNang = $tieuThuDienNang;
        }

        public function getPowerUsage() {
            return $this->tieuThuDienNang;
        }
    }

?>