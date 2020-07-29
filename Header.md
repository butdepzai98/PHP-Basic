#   ---------------------------------- Header -------------------------------
    header ( string $string [, bool $replace = true [, int $http_response_code ]] )  

-   $string: Đây là biến quan trọng nhất và bắt buộc phải khai báo, biến này quyết định hành động mà server sẽ thực thi.

-   $replace: tham số này được đặt mặc định là true, Tham số này quyết định chuỗi $string được replace hay là khai báo mới trong trường hợp khai báo nhiều header

-   $http_responsecode: Đây là một trong các mã như : 301, 404,500,...

#   1.Điều hướng trang với Header.
Để điều hướng trang web với hàm header trong PHP các bạn sử dụng cú pháp:

    header('location:'. $url);  

#   2.Chuyển đổi kiểu dữ liệu trả về với header.
Khai báo định dạng dữ liệu trả về
-   Định dạng trả về kiểu image png:
        header("Content-type: image/png");  

-   Định dạng trả về kiểu json:
        header("Content-type: application/json");  

