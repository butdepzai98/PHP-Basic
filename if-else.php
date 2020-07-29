<?php
    $a ='5';
    $b = 5;

    //So sánh
    if($a === $b){
        echo 'Cả 2 biến đồng nhất';
    }
    else
        echo '2 biến khác nhau kiểu dữ liệu';

    //Biểu thức điều kiện viết tắt
    echo "<br>";
    $sosanh = ($a == $b)? true:false;

    var_dump($sosanh);
    echo "<br>";
    