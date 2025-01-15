<?php
setcookie("username","", time()- 30,"/");
header("Location: login.html");
exit();
?>

