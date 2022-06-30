<?php
$ano = isset($_GET['ano'])?$_GET['ano']:"ano nao digitado";
$data = date("Y")- $ano;
//echo "Voce nascceu em $ano e tem $data de idade";
if(($data >16 && $data<18)|| ($data >65)){
        echo "Voce tem $data anos voto opsional!";
    }else if($data < 16){
        echo "Voce tem $data anos Voto proibido!";  
    }
else{
    echo "Voce tem $data anos voto obrigatorio!";
}

?>