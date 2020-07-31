#   --------------------------- Thêm dấu phẩy vào một số ----------------------
Nhiệm vụ của bạn là chuyển đổi một số đã cho thành một chuỗi có thêm dấu phẩy để dễ đọc hơn. 
Số phải được làm tròn đến 3 chữ số thập phân và dấu phẩy nên được thêm vào trong khoảng ba chữ số 
trước dấu thập phân. 
Không cần phải có dấu phẩy ở cuối số.

VD: 
    commas(-1000000.123) == "-1,000,000.123"

<?php
echo '<br>';

$number = -1000000.123;
echo '<br>';
echo number_format($number, 3,'.',',');

echo '<br>';
echo '<br>';
?>

#   --------------------------- number_format ----------------------
number_format ( float $number , $decimals = 0 , $dec_point = "." , $thousands_sep = "," );

-   $number là số cần định dạng.
-   $decimals là số chữ số thập phân muốn lấy, mặc định sẽ là 0.
-   $dec_point là kí tự phân cách với phần thập phân, mặc định là dấu " . ".
-   $thousands_sep là kí tự phân cách giữa các nhóm hàng nghìn, mặc định là dấu " , " 
