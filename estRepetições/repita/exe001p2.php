<?php
$in = isset($_GET['in'])? $_GET['in']:0;
$fn = isset($_GET['fn'])? $_GET['fn']:0;
$sa = isset($_GET['sa'])? $_GET['sa']:1;
if($sa == 0){
    $sa =1;
}
$n1 = $in;
if($n1 < $fn){
    while($n1 <= $fn){
        echo"valor $n1";
        $n1= $n1+ $sa;
    }
}else{
    while($n1 >= $fn){
        echo"valor $n1";
        $n1= $n1 - $sa;
    }
}

?>