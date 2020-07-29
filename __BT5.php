#   --------------------------- Số trong chuỗi ----------------------
Trong phần này, bạn sẽ được cung cấp một chuỗi có chữ và số viết thường. 
Nhiệm vụ của bạn là so sánh các nhóm số và trả về số lớn nhất.

VD: 
    solve("gh12cdy695m1") = 695 , vì đây là nhóm lớn nhất trong tất cả các nhóm số.

<?php 
    echo '<br>';
    
    $str = "gh12cdy695m1";
    print_r(explode(' ', $str)) ;

    
    // function largestNum ($str)
    // {
    //     $str = explode('', $str);
    // }
