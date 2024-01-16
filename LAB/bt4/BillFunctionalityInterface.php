<?php 

//chức năng của hóa đơn 
interface BillFunctionality {
    //tính tổng giá trị 
    public function calculateTotalValue();
    //hiển thị thông tin của bill 
    public function displayBillInfo();
}

?>