<?php
    $pri = isset($_GET['pri'])?$_GET['pri']:1;
    $seg = isset($_GET['seg'])?$_GET['seg']:1;

    $n1 = $pri;
    $v = 0;
    do{
        $s = $n1*$v;
        echo"$n1 x $v = $s <br>";
        $v++;
        }
    while($v <= 9);
?>
     <p> <a href="./exe002.html">Voltar</a></p>