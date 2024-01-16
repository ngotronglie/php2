<?php
    require_once './BillFunctionalityInterface.php';
    require_once './BillAbstract.php';
    require_once './ElectricityBill.php';
    require_once './WaterBill.php';
    require_once './PhoneBill.php';
    echo '<pre>';
    $electricityBill = new ElectricityBill("1234", "01/01/2022", 100);
    $electricityBill->calculateTotalValue();
    $electricityBill->displayBillInfo();

    $waterBill = new WaterBill("5678", "01/02/2022", 50);
    $waterBill->calculateTotalValue();
    $waterBill->displayBillInfo();

    $phoneBill = new PhoneBill("9101", "01/03/2022", 200);
    $phoneBill->calculateTotalValue();
    $phoneBill->displayBillInfo();
?>