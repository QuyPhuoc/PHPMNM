<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username = 'admin' && $password = '123'){
    echo "Dang nhap thanh cong";
    setcookie('username',$username, time() + 30, "/");
    echo "<a href='clearCookie.php'>Dang Xuat</a>";
}else{
    echo "Dang nhap that bai";
    echo "<a href='clearCookie.php'>Logout</a>";
}
?>
