#   ---------------------------------- Thay đổi thư -------------------------------

Sử dụng ngôn ngữ PHP, có chức năng LetterChanges (str) lấy tham số str được truyền 
và sửa đổi nó bằng thuật toán sau. 
Thay thế mọi chữ cái trong chuỗi bằng chữ cái theo sau trong bảng chữ cái 
(nghĩa là c trở thành d, z trở thành a). 
Sau đó viết hoa mọi nguyên âm trong chuỗi mới này (a, e, i, o, u) và 
cuối cùng trả về chuỗi đã sửa đổi này.

VD: 
    Đầu vào: "xin chào * 3"
    Đầu ra: "Ifmmp * 3"

    Đầu vào: "thời gian vui vẻ!"
    Đầu ra: "gvO Ujnft!"
    
<?php
    echo '<br>';

    $chuoi = 'abc dede zaz';

    $chuoi = explode(' ', $chuoi);

    foreach ($chuoi as $item) {
        for ($i=0; $i < strlen($item); $i++) { 

            if(ord($item[$i])+1 > 122)
            {
                $item[$i] = 'A';
                echo $item[$i];
            }
            else if(ord($item[$i])+1 == 101){
                $item[$i] = 'E';
                echo $item[$i];
            }
            else if(ord($item[$i])+1 == 105){
                $item[$i] = 'I';
                echo $item[$i];
            }
            else if(ord($item[$i])+1 == 111){
                $item[$i] = 'O';
                echo $item[$i];
            }
            else if(ord($item[$i])+1 == 117){
                $item[$i] = 'U';
                echo $item[$i];
            }

            else{
                echo chr(ord($item[$i])+1);
            }
        }
    }