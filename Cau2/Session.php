<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username = 'admin' && $password = '123'){
    echo "Dang nhap thanh cong";
    session_start();
    $_SESSION['username'] = $username;
    echo "<a href='clearSession.php'>Dang xuat</a>";
}else{
    echo "Dang nhap that bai";
}
?>
