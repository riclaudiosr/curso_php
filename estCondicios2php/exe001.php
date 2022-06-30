<?php
    $n = isset($_GET['num'])?$_GET['num']:0;
    $o = isset($_GET['oper'])?$_GET['oper']:1;

        switch($o){
            case 1:
                $r = $n * 2;
                break;
            case 2 :
                $r = $n*$n*$n;
                break;
            case 3:
                $r = sqrt($n);
        }
        echo "O resultadodo da operaçao e $r<br>" ;
            
?><a href="exe001.html" class="botao">Voltar</a>;