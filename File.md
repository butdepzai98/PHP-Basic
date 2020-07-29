#   ---------------------------------- File -------------------------------

#   1.Mở file_ _ _ _ _ _ _ _ _
để mở file trong PHP ta dùng hàm 
    fopen(command, mode);

-   command: đường dẫn đến file muốn mở

-   mode
    +   r: Chỉ được đọc
    +   r+: Được đọc và ghi
    +   w: Chỉ được viết
    +   w+: Được đọc và viết
    +   a: Được viết nếu file tồn tại nó sẽ ghi tiếp xuống dưới,
                            nếu file không tồn tại nó sẽ tạo file mới
    +   a+: Được viết và đọc nếu file tồn tại nó sẽ ghi tiếp xuống dưới,
                            nếu file không tồn tại nó sẽ tạo file mới
    +   b: Mở dưới chế độ binary

#   2.Đọc file_ _ _ _ _ _ _ _ _
Trong PHP chúng ta sử dụng hàm 
    feof : để kiểm tra xem đã ở vị trí cuối cùng của file chưa 
    fgec : để đọc từng ký tự của file.
    fgets : để đọc từng dòng
    fread($file,$filesize) : để đọc hết file

VD: Đọc từng ký tự (fgetc)

    $file = @fopen('data.txt', 'r');  

    if (!$file)  

        echo "Mở file không thành công";  

    else {  

        while (!feof($file)) { // hàm feof sẽ trả về true nếu ở vị trí cuối cùng của file  

            echo fgetc($file);  // đọc ra từng ký tự trong file  

        }  

    }

VD: Đọc hết file

    $file = @fopen('data.txt', 'r');  

    if (!$file)  

        echo "Mở file không thành công";  

    else {  

        echo fread($file, filesize('data.txt'));//filesize lấy ra dung lượng của file  

    }  


#   3.Ghi file_ _ _ _ _ _ _ _ _
Để ghi file thì bắt buộc file của bạn phải được mở ở chế độ mode có cho phép ghi file và tiếp đó dùng hàm fwrite để ghi dữ liệu.

VD :
$file = @fopen('data.txt', 'w');  

if (!$file)  

    echo "Mở file không thành công";  

else {  

    $data = 'Tôi ghi dòng này vào file nhé!';  

    fwrite($file, $data);  

}  

#   4.Đóng file_ _ _ _ _ _ _ _ _
Trong khi code bạn luôn luôn nhớ cho mình quy chế 
    open-closed nghĩa là mở thì phải đóng và trong file cũng thế. Trong PHP các bạn có thể dùng hàm fclose để đóng file.

VD: 
    $file = @fopen('data.txt', 'w');  

    if (!$file)  

        echo "Mở file không thành công";  

    else {  

        $data = 'Tôi ghi dòng này vào file nhé!';  

        fwrite($file, $data);  

        fclose($file);  

    }  

#   5.Các hàm khác_ _ _ _ _ _ _ _ _

#   file_exists()
kiểm tra sự tồn tại của file, hàm sẽ trả về true nếu file tồn tại và ngược lại false nếu không.

    if(file_exists('data.txt'))  
        echo 'file tồn tại';  

#   is_writable()
kiểm tra quyền ghi file 

#   file_get_contents()
Để lấy nội dung của một file

    echo file_get_contents('data.txt');  

#   mkdir()
Tạo thư mục
chúng ta cũng có thể dùng hàm mkdir(path,mode,recursive,context)

#   is_dir()
kiểm tra xem thư mục có tồn tại hay không

#   rename('data.txt', 'newdata.txt');  
đổi tên file các bạn có thể dùng hàm rename(old,new).

#   copy(path,pathcopy) 
để copy file

#   unlink()
Xóa file
