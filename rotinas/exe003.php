<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FUNÇAO</title>
</head>
<body>
    <?php
    function soma(){
        $p = func_get_args();
        $t = func_num_args();
        $s = 0;
        for($i = 0; $i < $t; $i++){
            $s = $s + $p[$i];
        }
        return $s;
    }
    $r = soma(3,5,2);
    echo "A soma dos valores e $r";
    ?>
</body>
</html>