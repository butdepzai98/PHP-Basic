#   --------------------------- Nguyên âm ----------------------
Đếm số nguyên âm trong chuỗi đã cho.
Chúng tôi sẽ coi a, e, i, o và u là nguyên âm.

<?php

echo '<br>';
$str = 'co chac yeu la day';

function countNguyenAm($str)
{
    $dem = 0;
    $str = str_replace(' ','',$str);

    for ($i=0; $i < strlen($str); $i++) { 
        if (($str[$i] == 'a')||($str[$i] == 'e')||($str[$i] == 'i')||($str[$i] == 'o')||($str[$i] == 'u')) {
            $dem++;
        }
    }

    return $dem;
}

echo countNguyenAm($str);