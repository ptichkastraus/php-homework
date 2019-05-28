<?php
//Отсортировать массив по 'price'
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ]
];



//это неправильно, но я очень старалась, поэтому оставлю здесь
// asort($arr);
// foreach ($arr as $sort) {
//     $result = $sort['price'];
//     var_dump("отсортированные цены по возрастанию: = " .$result);
// };


// arsort($arr);
// foreach ($arr as $sort) {
//     $result = $sort['price'];
//     var_dump("отсортированные цены по убыванию: = " .$result);
// };



$res = [];
foreach ($arr as $key => $value) {
$res[$key] = $value['price'];
}
array_multisort($res, SORT_DESC, SORT_NUMERIC, $arr );
var_dump($arr);


$res = [];
foreach ($arr as $key => $value) {
$res[$key] = $value['price'];
}
array_multisort($res, SORT_ASC, SORT_NUMERIC, $arr );
var_dump($arr);


?>