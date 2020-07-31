#   --------------------------- Nguyên âm đảo ngược trong một chuỗi ----------------------
Mục tiêu của bạn là viết một hàm sẽ đảo ngược các nguyên âm trong một chuỗi. 
Bất kỳ ký tự nào không phải là nguyên âm nên giữ nguyên vị trí ban đầu

    VD:
        Hello    -> Holle
        Tomatoes -> Temotaos

<?php
echo '<br>';

$str = 'Hel loluap';
$str2 = 'Hel loa';

function laNguyenAm($str)
{
    if (($str == 'a')||($str == 'e')||($str == 'i')||($str == 'o')||($str == 'u')) {
        return true;
    }
    else
        return false;
}

function countNguyenAm($str)
{
    $dem = 0;
    $str = str_replace(' ','',$str);

    for ($i=0; $i < strlen($str); $i++) { 
        if (laNguyenAm($str[$i])) {
            $dem++;
        }
    }

    return $dem;
}

function revert2Vitri($str, $vt1, $vt2)
{
    $temp = $str[$vt1];
    $str[$vt1] = $str[$vt2];
    $str[$vt2] = $temp;

    return $str;
}

function revertNgAm($str)
{
    $str = str_replace(' ','',$str);
    $num_NgAm = countNguyenAm($str);

    $array_key = [];
    $array_key_revert = [];

    if($num_NgAm == 1)
    {
        echo $num_NgAm;
    }
    else if($num_NgAm%2 == 0)
    {
        for ($i=0; $i < strlen($str); $i++) { 
            if(laNguyenAm($str[$i]))
            {
                array_push($array_key, $i);
                $array_key_revert = array_reverse($array_key);
            }
        }

        //Tiến hành đảo ngược
        for ($j=0; $j < sizeof($array_key)/2; $j++) { 
            $str = revert2Vitri($str, $array_key[$j], $array_key_revert[$j]);
        }

        return $str;
    }
    else
    {
        for ($i=0; $i < strlen($str); $i++) { 
            if(laNguyenAm($str[$i]))
            {
                array_push($array_key, $i);
                $array_key_revert = array_reverse($array_key);
            }
        }

        //Tiến hành đảo ngược
        for ($j=0; $j <= sizeof($array_key)/2; $j++) { 
            $str = revert2Vitri($str, $array_key[$j], $array_key_revert[$j]);
        }

        return $str;
        // echo (int)(sizeof($array_key)/2);
        // echo '<br>';
        // var_dump($array_key);
        // echo '<br>';
        // var_dump($array_key_revert);
    }
}

echo revertNgAm($str2);