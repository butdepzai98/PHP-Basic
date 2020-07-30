#   --------------------------- Trao đổi mảng và đảo ngược ----------------------
Đã đến lúc trao đổi mảng! Mục tiêu rất đơn giản: 
Để trao đổi giữa hai mảng nhưng với một lần bắt; 
nội dung của mảng trao đổi phải được đảo ngược.

    VD: 
        ->input
            my_array = ['a', 'b', 'c']
            other_array = [1, 2, 3]

        ->output
            my_array = [3, 2, 1]
            other_array = ['c', 'b', 'a']

<?php

    $arr1 = ['a', 'b', 'c'];
    $arr2 = [1, 2, 3];

    $arr1 = array_reverse($arr2);
    $arr2 = array_reverse($arr1);

    echo '<pre>';
    print_r($arr1);
    print_r($arr2);
    echo '</pre>';