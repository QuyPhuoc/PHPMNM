<?php
$x = $_POST['x'];
for($i = 1; $i <= $x; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

?>
