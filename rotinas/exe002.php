<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rotina retornando valor</title>
</head>
<body>
    <?php
        function soma($a, $b){
            $s = $a + $b;
            return $s;
        }
        $x = 3;
        $y = 4;
        $r = ($x + $y);
        echo "<p>A soma entre $x e $y e $r</p>";

    ?>
    <?php
           function multi($a, $b){
            return $a * $b;
        }
        $x = 3;
        $y = 4;
        $r = ($x * $y);
        echo "<p>A soma entre $x e $y e $r</p>";
    ?>
    
</body>
</html>