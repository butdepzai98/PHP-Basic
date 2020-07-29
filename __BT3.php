#   ---------------------------------- Số điện thoại -------------------------------
Viết hàm chấp nhận một mảng gồm 10 số nguyên (từ 0 đến 9), 
trả về một chuỗi các số đó dưới dạng số điện thoại.

VD: 
    tạo PhoneNumber ([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]) // => trả về "(123) 456-7890"

Đừng quên khoảng trống sau dấu ngoặc đơn đóng!

<?php

    echo '<br>';
    $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

    function PhoneNumber($a = [])
    {
        $a1 = array_slice($a, 0, 3);
        $a2 = array_slice($a, 3, 3);
        $a3 = array_slice($a, 6, 4);

        echo '('.implode($a1).') '.implode($a2).'-'.implode($a3);
    }

    PhoneNumber($a);