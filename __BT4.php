#   --------------------------- Không gian trong chuỗi ----------------------
Giả sử "#" giống như backspace trong chuỗi. 
Điều này có nghĩa là chuỗi "a # bc # d" thực sự là "bd"
Nhiệm vụ của bạn là xử lý một chuỗi với các ký hiệu "#".

VD:

    "abc#d##c" ==> "ac"
    "abc##d######" ==> ""
    "#######" ==> ""
    "" ==> ""

<?php
    $text = 'abc#d##c';

    function cleanString(string $text)
    {
        $result = '';
        for ($i = 0; $i < strlen($text); $i++){
            if($text[$i] === '#') {
                if(strlen($result) > 0) {
                    $result = substr($result, 0, -1);
                }
            } else {
                $result .= $text[$i];
            }
        }
        return $result;
    }

    echo '<br>';
    echo cleanString($text);
    