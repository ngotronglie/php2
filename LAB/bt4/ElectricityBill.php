<?php 
    class ElectricityBill extends Bill {
        private $electricityUsage;

        public function __construct($billNumber, $paymentDate, $electricityUsage) {
            parent::__construct($billNumber, $paymentDate, 0);
            $this->electricityUsage = $electricityUsage;
        }

        public function calculateTotalValue() {
            // Tính tổng giá trị hóa đơn tiền điện dựa trên mức sử dụng điện
            $this->totalValue = $this->electricityUsage * 0.2;
        }
    }

?>