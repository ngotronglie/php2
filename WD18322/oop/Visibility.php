<?php 

class Visibility 
{
    public $publicVar;
    protected $protectedVar;
    private $privateVar;

    public function setProtectedVar($protectedVar) {
        $this->protectedVar = $protectedVar;
    }

    public function setPrivateVar($privateVar) {
        $this->privateVar = $privateVar;
    }

    public function getProtectedVar() {
        return $this->protectedVar;
    }

    public function getPrivateVar() {
        return $this->privateVar;
    }
}

class VisibilityChild extends Visibility
{
    public function hienThiGiaTriBienProtectedVar() {
        return $this->protectedVar;
    }
}

echo "<pre>";

$vc = new VisibilityChild;

print_r($vc);