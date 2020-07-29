#   ---------------------------------- String -------------------------------

-   In ra các ký tự đặc biệt cần thêm dấu \ đằng trước

#   _String Function______

#   chr($so)
In ra Ký tự ứng với số nhập vào trong bảng ascii

#   ord($kytu)
In ra mã ascii của Ký tự


---------------- Chuỗi -> Mảng || Mảng -> Chuỗi --------------------


#   explode(' ', $chuoi)___
Chuyển đổi String thành mảng


#   implode('', $mang)
Chuyển đổi Mảng thành String


-----------------------------------------------------------------------


#   substr($chuoi, $vitriBatDau, $soKyTuMuonLay)
Sử dụng để trả về 1 phần của Chuỗi

    $my_var = 'This is a really long sentence that I wish to cut short';
    echo substr($my_var,0, 12).'...';

#   str_replace($chuoiCầnThay, $chuoiSeThay, $chuỗi)
Thay thế chuỗi trong chuỗi

#   strpos()___
Được sử dụng để xác định vị trí và trả về vị trí của (các) ký tự trong chuỗi.

    echo strpos('PHP Programing','Pro');       //Display: 4


------------------------------------


#   strtolower()
Chuyển đổi các phần tử của chuỗi thành dạng _viết thường_

#   strtoupper()
Chuyển đổi các phần tử của chuỗi thành dạng _viết hoa_

#   ucfirst()
Chỉ _viết hoa_ chữ đứng đầu cả chuỗi, còn lại giữ nguyên

#   lcfirst()
Chỉ _viết thường_ chữ đứng đầu cả chuỗi, còn lại giữ nguyên

------------------------------------

#   strlen()
Đếm độ dài của chuỗi (tính cả dấu Space)

#   str_word_count()
Được sử dụng để đếm số lượng từ trong một chuỗi. Nhưng lại coi mỗi Space là một chuỗi

------------------------------------


#   sha1()
Được sử dụng để tính hàm băm SHA-1 của giá trị chuỗi

#   md5()
Mã hóa md5 cho chuỗi


