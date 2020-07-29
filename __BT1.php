#   ---------------------------------- Từ dài nhất -------------------------------
Sử dụng ngôn ngữ PHP, có chức năng LongestWord (sen) lấy tham số sen được truyền 
và trả về từ lớn nhất trong chuỗi. Nếu có hai hoặc nhiều từ có cùng độ dài, 
hãy trả về từ đầu tiên từ chuỗi có độ dài đó. Bỏ qua dấu câu và giả sử sen sẽ không trống.

VD : 
    Đầu vào: "fun&!! time"
    Đầu ra: "fun&!!"
    
    Đầu vào: "I love dogs"
    Đầu ra: "love"


<?php
    echo '<br>';

    $w = 'fun&!! time';
    $w = str_replace('','',$w);

    var_dump($w);
    die();
    $w = explode(' ',$w);

    $LongestWordlength = 0;
    $LongestWord = '';

    foreach ($w as $item) {
        if(strlen($item) > $LongestWordlength)
        {
            $LongestWordlength = strlen($item);
            $LongestWord = $item;
        }
    }

    echo $LongestWord;
