<?php
$n1 = isset($_GET['n1'])?$_GET['n1']:0;
$n2 = isset($_GET['n2'])?$_GET['n2']:0;
$m = ($n1+$n2)/2;
//echo "Media ". number_format ($m, 2) ;
echo"<br>";
if($m < 4){
    echo "media ".number_format($m,2)." aluno reprovado";
}else if($m >= 4 && $m <=6 ){
   echo "Media ".number_format($m,2)." aluno em recuperação";
}else{
    echo"Media ".number_format($m,2)." aluno aprovado";
}
?>