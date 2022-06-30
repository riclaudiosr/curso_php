<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    //repita
        $c=1;
        while($c<= 20){
            echo" $c";
            $c++;
        }
        echo"<br>";
    ?>

    <?php
    //enquanto
        $v = 1;
        do{
            echo"$v ";
            $v++;
        }while($v <= 20);
        echo"<br>";
    ?>

    <?php
    //para
        for($n =1; $n <= 20; $n++){
            echo "$n ";
        }
    ?>

</body>
</html>