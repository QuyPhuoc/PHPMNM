<?php
session_unset();
session_destroy();
setcookie('username', '', time() - 30);
header('Location:login.html');
?>

