<?php
$x = $_POST['x'];
$sum = 0;
for($i = 1; $i <= $x; $i++){
    if($i % 2 == 1){
       $sum += $i;
    }
}
echo "Tong le: $sum";
?>

