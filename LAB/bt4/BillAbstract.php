<?php 
    abstract class Bill implements BillFunctionality {
        protected $billNumber;
        protected $paymentDate;
        protected $totalValue;

        public function __construct($billNumber, $paymentDate, $totalValue) {
            $this->billNumber = $billNumber;
            $this->paymentDate = $paymentDate;
            $this->totalValue = $totalValue;
        }

        public abstract function calculateTotalValue();

        public function displayBillInfo() {
            echo "Bill Number: " . $this->billNumber . PHP_EOL;
            echo "Payment Date: " . $this->paymentDate . PHP_EOL;
            echo "Total Value: " . $this->totalValue . PHP_EOL;
        }
    }
?>