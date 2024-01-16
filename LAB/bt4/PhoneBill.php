<?php  

class PhoneBill extends Bill {
    private $numberOfCalls;

    public function __construct($billNumber, $paymentDate, $numberOfCalls) {
        parent::__construct($billNumber, $paymentDate, 0);
        $this->numberOfCalls = $numberOfCalls;
    }

    public function calculateTotalValue() {
        // Tính tổng giá trị hóa đơn điện thoại dựa trên số lượng cuộc gọi
        $this->totalValue = $this->numberOfCalls * 0.05;
    }
}
?>