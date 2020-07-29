#   ---------------------------------- Datetime -------------------------------

#   1. Thiết lập thời gian ở Việt Nam.

    date_default_timezone_set('Asia/Ho_Chi_Minh');  

==> chú ý: phải đặt ở đầu file để các đoạn code phía sau chạy chính xác
-   Và để xem danh sách các timezone mà PHP hỗ trợ thì các bạn sử dụng đoạn code sau:
    
    foreach (timezone_abbreviations_list() as $abbr => $timezone) {  

        foreach ($timezone as $val) {  

            if (isset($val['timezone_id'])) {  

                var_dump($abbr, $val['timezone_id']);  

            }  

        }  

    }  

#   2. Định dạng ngày tháng với hàm date().
Hàm date trong dùng để chuyển đổi thời gian thành các định dạng tùy chỉnh.

    date(format, timestamp);  

trong đó:
    -   format : định dạng thời gian muốn xuất ra
    -   timestamp : là thời gian các bạn truyền vào (int) nếu để trống trường này thì PHP sẽ tự động lấy thời gian hiện tại.

Danh sách các format trong PHP_ _ _ _ _ _
    -   h: Trả về giờ trong ngày kiểu 12h.
    -   H: Trả về giờ trong ngày kiểu 24h.
    -   i: Trả về phút trong giờ
    -   s: Trả về số giây trong phút

    -   d: Trả về ngày trong tháng từ (1-31)
    -   j: Trả về ngày trong tháng nhưng nếu ngày <10 sẽ không hiển thị số 0
    -   D: Trả về định dạng thứ trong tuần bằng tiếng Anh viết tắt
    -   I: Trả về đầy đủ thứ trong tuần bằng tiếng Anh

    -   m: Trả về tháng 1-12
    -   M: Trả về tháng bằng tiếng Anh viết tắt

    -   y: Trả về 2 số cuối của năm
    -   Y: Trả về đủ 4 số của năm

VD: echo date('d-m-Y H:i:s');  

#   2. Các hàm xử lý khác.

#   strtotime(time)
chuyển đổi thời gian sang kiểu Int
    strtotime(date('Y-m-d H:i:s'));  

#   date_format()
chuyển đổi kiểu thời gian hiển thị

    $date=date_create("2017-02-19");  
    echo date_format($date,"Y/m/d H:i:s");  

#   Tính toán ngày tháng_ _ _ _ _ _ _ _ _ 

#   date_modify($date, "+11 days")
Để tính toán đặc biệt là cộng trừ thêm ngày trong PHP chúng ta dùng hàm date_modify()

#   get_date()
chuyển đổi dữ liệu ngày tháng về dạng mảng