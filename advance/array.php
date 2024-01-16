<?php
echo "<pre>" . PHP_EOL;
// Có 3 loại mảng
// - tuần tự
// - liên hợp 
// - 1 chiều

$array1 = [10, 15, 20, 25];
echo $array1[2] . PHP_EOL;
$array2 = [
        'name' => 'Ngo Trong Liem',
        'age' => 25
];
echo $array2['name'] . PHP_EOL;
$array3 = [
        ['name' => 'NGo Trong Liem  ', 'age' => 19],
        ['name' => 'NGo Trong Liem 1', 'age' => 20],
        ['name' => 'NGo Trong Liem 2', 'age' => 21],
];
echo $array3[2]['age'] . PHP_EOL;

$array4 = [
        ['name' => 'NGo Trong Liem  ', 'age' => 19],
        ['name' => 'NGo Trong Liem 1', 'age' => 20],
        [
                'name' => 'Ngo Trong Liem 2',
                'age' => 21,
                'points' => [
                        'web2' => 10,
                        'PHP2' => 9
                ]
        ]
];
echo $array4[2]['points']['web2'];
//  hàm array_merge - gộp 1 hoặc nhiều mảng

$a = [1, 5, 'xyz' => 'qka'];
$b = [10, 50, 'xyz' => 'jqk'];
$c = [100, 500, [123, 345]];

$arr_merge = array_merge($a, $b, $c);
// $arr_merge2 = array_merge[...$a,...$b,...$c];
print_r($arr_merge) . PHP_EOL;
print_r($arr_merge2) . PHP_EOL;

// array_push - thêm 1 hay nhiều phần tử vào mảng

array_push($a, 'xuz', 'qka', [111, 'key' => 'hello']);
print_r($a) . PHP_EOL;
// hàm tìm kiếm phần tử trong mảng - in_array
// if (in_array(111, ['kiki' => 'ahihi'], $a)) {
//         echo 'ok' . PHP_EOL;
// } else {
//         echo '!ok' . PHP_EOL;
// }
// explode(); - tách 1 chuỗi 
$str = 'helo mn mình là Liêm';
$array = explode(' ', $str);
print_r($array) . PHP_EOL;

// implode() -- nối 1 mảng thành 1 chuỗi theo 1 kí tự

?>