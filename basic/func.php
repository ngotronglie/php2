<?php

echo "<pre>";
// có 3 loại function

// hàm có trả về 
    function coTraVe($a, $b){
        return $a + $b;
    }
    // gọi hàm
    $sum = coTraVe(4,5);
    echo $sum . PHP_EOL;

// hàm không trả về 
    function khongTraVe($a, $b){
        echo $a + $b;
    }
    khongTraVe(4,6) . PHP_EOL;
// hàm có tham số 
    function coThamso($temp){
        return $temp;
    }

// hàm không có tham số
    function khongthamSo(){
        echo 'không có tham so';
    }

    echo coThamso('co tham so') . PHP_EOL;
    echo khongthamSo() . PHP_EOL;



    function hi($name , $msg = 'hi'){
        return $msg . ", " . $name . PHP_EOL;
    }
    echo hi('Liêm') . PHP_EOL;
    echo hi('Liêm' , 'Hello') . PHP_EOL;

    // function hi2( $msg = 'hi', $name){
    //     return $msg . ", " . $name . PHP_EOL;
    // }
    // echo hi2(,'Liem' ) . PHP_EOL;// sai nhé vì nó đọc hiểu 



    // ================ closure & arrow =============================

    $closure1 = function () {
        echo "đây là closure". PHP_EOL;
    };
    $closure1();  // biến thành hàm luôn 

    $y = 5;

    array_map(function($item) use ($y){  // use sử dụng để bơm cái biến $y vào trong function này vì lúc đầu nó không chạy được
        echo $item * $y . PHP_EOL;
    },[1,2,3]);



   $fn = fn($x) => $y * $x;  // dấu suy ra ở đây = return
   echo $fn(5) . PHP_EOL;
   $arr = [1,2,3];
   $arr2 = array_map(fn($item) => $item * $y .PHP_EOL,$arr);
   print_r($arr2);
?>