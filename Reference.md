#   ---------------------------------- Reference -------------------------------
chỉ đơn giản là một cách để tham chiếu các nội dung của một biến bằng một tên khác giống như cách dùng file shortcuts trong Window.

1.  Khởi tạo 1 Reference_ _ _ _ _ _ _ _

    $myVar = "Hi there";
    
    $anotherVar = & $myVar;

    $anotherVar = "See you later";
    echo $myVar; // Displays "See you later"
    echo $anotherVar; // Displays "See you later"

#   2. Xóa 1 Reference_ _ _ _ _ _ _ _
You delete a reference using the 
    unset() function, in the same way that you delete a regular variable.

==> chú ý: Phải unset() cả biến Reference và biến được Reference

VD : 
    $myVar = "Hi there";
    $anotherVar =& $myVar;
    $anotherVar = "See you later";

    unset( $anotherVar );
    unset( $myVar );

    echo $myVar; // Displays ""

#   3. Reference trong function_ _ _ _ _ _ _ _
Thông thường, khi bạn truyền một biến cho một hàm, hàm sẽ nhận được một bản sao của giá trị của biến đó. Tuy nhiên, bằng cách chuyển tham chiếu đến một biến, hàm có thể tham chiếu - và quan trọng hơn là sửa đổi - biến ban đầu.

VD : 
    $myVar = "Hi there";

    function goodbye( &$greeting ) {
        $greeting = "See you later";
    }

    goodbye( $myVar );
    echo $myVar; // Displays "See you later"

#   4. Trả về 1 Reference từ 1 function_ _ _ _ _
Để thực hiện việc này, 
    đặt dấu & trước tên hàm khi bạn khai báo hàm. Bạn cũng nên sử dụng 
    gán-by-Reference ( =&) khi gán tham chiếu được trả về cho một biến, nếu không, bạn sẽ chỉ gán giá trị, không phải tham chiếu

VD :
    $numWidgets = 10;

    function &getNumWidgets() {
    global $numWidgets;
    return $numWidgets;
    }

    $numWidgetsRef =& getNumWidgets();
    $numWidgetsRef--;
    echo "$numWidgets = $numWidgets<br>";  // Displays "9"
    echo "$numWidgetsRef = $numWidgetsRef<br>";  // Displays "9"

#   5.  Thay đổi giá trị Value qua foreach với Reference_ _ _ _ 
VD:
    $bands = array( "The Who", "The Beatles", "The Rolling Stones" );

    foreach ( $bands as &$band ) {
        $band = strtoupper( $band );
    }

    echo "<pre>";
    print_r( $bands );
    echo "</pre>";
