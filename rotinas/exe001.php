<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <title>Rotina</title>
</head>
<body>
    <?php
        function soma($a, $b){
            $s = $a+ $b;
            echo " <p>A soma vale $s</p>";
        }
        soma(3,4);
        soma(8,5);
        soma(1569, 3879);
        $x= 9;
        $y = 11;

        soma($x, $y);
    ?>
</body>
</html>