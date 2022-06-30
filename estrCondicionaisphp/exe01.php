<?php
$ano = isset($_GET['ano'])?$_GET['ano']:"ano nao digitado";
$data = date("Y")- $ano;
//echo "Voce nascceu em $ano";
if($data < 18){
    echo "Voce tem $data anos e nao pode votar";
}else{
    echo "Voce tem $data anos e pode votar";
}
?>