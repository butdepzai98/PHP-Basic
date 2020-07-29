<?php
    /**
        Phương thức truyền dữ liệu từ Client lên Server
     */

//Phương thức Get (tối đa 1024 ký tự)
    // if(isset($_GET["txtName"])){
    //     echo'<div>Họ tên:'.$_GET["txtName"].'</div>';
    //     echo"<br>";
    //     echo'<div>Họ tên:'.$_GET["txtLop"].'</div>';

    //     die();
    // }
?>
    <form action="get_post.php" method="post">
        <label for="">Họ tên :</label>
        <input type="text" name="txtName" id="">
        <label for="">Lớp</label>
        <input type="text" name="txtLop" id="">
        <input type="submit" value="Nhập">
    </form>

/-----------------------------------------------------------

<?php
//Phương thức Post (gửi dữ liệu qua Http-Header) - ko bị giới hạn dữ liệu
if(isset($_POST["txtName"])){
    echo'<div>Họ tên:'.$_POST["txtName"].'</div>';
    echo"<br>";
    echo'<div>Họ tên:'.$_POST["txtLop"].'</div>';

    die();
}
?>