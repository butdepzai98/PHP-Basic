#   --------------------------- Số trong chuỗi ----------------------
Trong phần này, bạn sẽ được cung cấp một chuỗi có chữ và số viết thường. 
Nhiệm vụ của bạn là so sánh các nhóm số và trả về số lớn nhất.

VD: 
    solve("gh12cdy695m1") = 695 , vì đây là nhóm lớn nhất trong tất cả các nhóm số.

<?php 
    echo '<br>';
    
    $str = "ghBG12cdy69m1A";

    function maxNum($n = [])
    {
        $max = $n[0];

        for ($j=0; $j < sizeof($n); $j++) { 
            if($n[$j] > $max)
            {
                $max = $n[$j];
            }    
        }

        return $max;
    }

    function largestNum ($str)
    {
        for ($i=0; $i < strlen($str); $i++) 
        {
            
            if(ord($str[$i]) <= 122 && ord($str[$i]) >= 97)
            {
                $str[$i] = ' ';
            }
            else if(ord($str[$i]) <= 90 && ord($str[$i]) >= 65)
            {
                $str[$i] = ' ';
            }

        }

        $str = explode(' ', $str);
        echo maxNum($str);
    }

    largestNum($str);