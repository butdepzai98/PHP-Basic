<?php
    /**
        Session và Cookie dùng để quản lý phiên làm việc của người dùng
            - session lưu ở trên Server
            - cookie lưu ở client
     */

//Session
session_start();
//  $_SESSION["key"] = 'Vinh';
var_dump($_SESSION);

    //Xóa Session 
    unset($_SESSION["key"]);
    die();

    //--------------------------------------------
    
//Cookie
$cookie_name = "user";
$cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//Xóa cookie
// setcookie($cookie_name, "", -1);

// var_dump($_COOKIE);

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                echo 'Có COOKIE: '.$_COOKIE[$cookie_name];
            }
            else    
                echo 'Không có COOKIE';
        ?>
    </body>
    </html>
