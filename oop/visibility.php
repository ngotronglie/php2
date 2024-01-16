<?php 
// phamj vi 

class Visibility 
{
    public $publicVar;
    protected $protectedVar;
    private $privateVar;

    public function setProtectedVar($protectedVar){
        $this->protectedVar = $protectedVar;
    }
    public function setPrivateVar($privateVar){
        $this->privateVar = $privateVar;
    }
}

echo '<pre>';
// test phạm vi truy cập
$obj1 = new Visibility();
$obj1->publicVar = 'XXX';
// $obj1->protectedVar = 'KKK'; // không thể truy cập vào  output: báo lỗi
// $obj1->privateVar = 'PPP';   // không thể truy cập vào  output: báo lỗi
$obj1-> setProtectedVar('KKK');
print_r($obj1);



class visibilityChill extends Visibility{
    public function hienThiGiaTriBienProtectedVar(){
        return $this->protectedVar;
    }
}
$vc = new VisibilityChill();
print_r($vc);
?>