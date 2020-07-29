#   ---------------------------------- Array Function -------------------------------

#   1.sizeof($arr)
in ra số lượng phần tử trong mảng

#   2.is_array($arr)
kiểm tra xem có phải là mảng

#   3.in_array($value, $arr)
kiểm tra xem giá trị $value có nằm trong mảng hay không

#   5.array_values($arr)
lấy tất cả các value của mảng cũ ra 

#   6.array_keys($arr)
lấy tất cả các key của mảng cũ ra 

#   7.array_rand($arr)
In ra random 1 phần tử trong mảng

#   8.array_slice($arr, $offset, $length, true)
Tách mảng từ _key-offset_ đến _key-length_

- Hàm trả về dãy phần tử từ mảng array khi được xác định bởi các tham số offset và length.

- Nếu offset là không âm, dãy phần tử sẽ bắt đầu tại offset đó trong mảng. Nếu offset là âm, dãy phần tử sẽ bắt đầu từ cuối mảng.

- Nếu length được cung cấp và là dương, thì dãy này sẽ có các phần tử đó. Nếu length được cung cấp và là âm, thì dãy sẽ dừng ở các phần tử đó từ cuối mảng. Nếu bị bỏ qua thì dãy sẽ có mọi phần tử từ offset tới cuối mảng. (Có hoặc không có đều được)

- Tùy ý. TRUE để giữ nguyên _key_ và FALSE để thiết lập lại _key_. Mặc định là FALSE 
(Có hoặc không có đều được)

------------------------ Thêm -----------------------------
#   array_merge($arr1, $arr2)
Gộp 2 mảng

#   array_push($arr, $val)
Thêm phần tử vào mảng

#   array_unshift($arr)
Thêm phần tử vào đầu mảng


------------------------ Xóa ------------------------------
#   array_pop($arr)
Xóa đi phần tử cuối cùng trong mảng


#   array_shift($arr)
Xóa đi phần tử đầu tiên của mảng



------------------------ Sắp xếp ------------------------------
#   sort($arr)
Sắp xếp lại _value_ thứ tự ABC

#   arsort($arr) 
Sắp xếp lại _value_ thứ tự CBA

#   ksort($arr)
Sắp xếp lại _key_ thứ tự ABC

#   krsort($arr)
Sắp xếp lại _key_ thứ tự CBA

#   rsort($arr)
Xóa hết _key_ thành [0-n] rồi sắp xếp _value_ thứ tự ABC

#   array_flip($arr)
Đảo ngược tất cả _value_ thành _key_ 

#   array_reverse($arr)
Đảo ngược lại mảng từ đầu xuống cuối 
 