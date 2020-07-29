<?php

//Tạo mảng
$mang = [
    'Bắc',
    'Trung',
    'Nam',
];

//Thêm phần tử vào mảng
$mang[] = 'Đông';
print_r($mang);

//----------------------- array_values() --------------------------
$arv = [
    'v1' => 'Nguyễn',
    'a2' => 'Xuân',
    'c3' => 'Vinh',
];

$arv2 = array_values($arv);
echo '<pre>';
print_r($arv2);
echo '</pre>';

//----------------------- array_keys() --------------------------
$arkey = [
    'x' => 1,
    'u' => 1,
    'a' => 1,
    'n' => 1,
];

$arkey2 = array_keys($arkey);
echo '<pre>';
print_r($arkey2);
echo '</pre>';



//----------------------- rsort() --------------------------
$rsort = [
    "dog"   =>  "large",  
    "cat"   =>  "medium",  
    "mouse" =>  "small"
];

$num = [10, 20, 30, 40, 50];

print_r(array_slice($num, 1, 4));