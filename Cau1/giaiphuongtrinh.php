<?php
$a = $_POST['a'];
$b = $_POST['b'];
if($a == 0){
    if($b == 0){
        echo "Phuong trinh vo so nghiem";
    }else{
        echo "Phuong trinh vo nghiem";
    }
} else {  
    $x = -$b / $a;
    echo "Phuong trinh co nghiem: $x";
}

?>

