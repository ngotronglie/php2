<?php 
        class WaterBill extends Bill {
            private $waterUsage;
        
            public function __construct($billNumber, $paymentDate, $waterUsage) {
                parent::__construct($billNumber, $paymentDate, 0);
                $this->waterUsage = $waterUsage;
            }
        
            public function calculateTotalValue() {
                // Tính tổng giá trị hóa đơn tiền nước dựa trên lượng nước sử dụng
                $this->totalValue = $this->waterUsage * 0.1;
            }
        }

?>