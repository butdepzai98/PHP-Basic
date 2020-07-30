#   --------------------------- Kí tự phổ biến nhất trong chuỗi ----------------------
Đếm ký tự xuất hiện thường xuyên nhất trong một chuỗi nhất định.
VD:
    'aab00' -> a

<?php 
    echo '<br>';

    $str = "ababbab  sdsdsdxxxx";
    $str = str_replace(' ','',$str);

    function myCount($a, $string)
    {
        $dem = 0;

        for ($i=0; $i < strlen($string); $i++) { 
            if($string[$i] == $a)
            {
                $dem++;
            }
        }
        return $dem;
    };

    function mostComChar($str)
    {
        //echo $str[0];
        $max = 0;
        $most = '';

        for ($i=0; $i < strlen($str); $i++) { 

            if(myCount($str[$i], $str) > $max)
            {
                $most = $str[$i];
                $max = myCount($str[$i], $str);
            }
        }

        return $most;
    }

    echo mostComChar($str);