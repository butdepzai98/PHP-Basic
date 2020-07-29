#   ---------------------------------- Mảng -------------------------------

-   là danh sách các phần tử có cùng hoặc không cùng kiểu dữ liệu
   Có 2 loại mảng:
    -   Mảng 1 chiều
        +   Tuần tự
        +   Không tuần tự
    -   Mảng đa chiều
        +   Tuần tự
        +   Không tuần tự

#   1.Hiển thị mảng_ _ _ _ _ _ _

echo '<pre>';
print_r($array);
echo '</pre>';

#   2.Thêm 1 phần tử vào mảng_ _ _ _ _ _ _

    $array['key'] = 'value1';
hoặc
    $array[] = 'value2';

#   3.Sửa phần tử trong mảng_ _ _ _ _ _ _

    $array['ten_key'] = 'value'