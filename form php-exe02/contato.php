<?php
$nome = isset($_POST['nome'])?$_POST['nome']:'sem nome';
$ano = isset($_POST['ano'])?$_POST['ano'] : 0;
$sexo = isset($_POST['sexo'])?$_POST['sexo']: 'sem sexo';
$idade = date('Y') - $ano;
 echo " $nome  e $sexo nasceu em $ano tem $idade";

?>
<br><a href="./form.html">Voltar</a>