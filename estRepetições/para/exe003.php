<!DOCTYPE html>
<html lang="pt-br">
<head>   
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
        $n = isset($_GET['num'])?$_GET['num']:"1";
        $t = 1;
        while($t <= 9){
            $r = $n * $t;
            print "$n x $t = $r <br>";
            $t++;
        }
    ?>
        <br>
    <?php
       $n = isset($_GET['num'])?$_GET['num']:"1";
        $t = 1;
        do{
            $r = $n * $t;
            echo "$n x $t = $r <br>";
            $t++;
        }while($t <= 9)
    ?>
    <br>
    <?php
         $n = isset($_GET['num'])?$_GET['num']:"1";
         for($t = 1; $t <= 9; $t++ ){
            $r = $n * $t;
            echo "$n x $t = $r <br>";
        }
      
    ?>
        <br> <a href="./form003.php">voltar</a>
    </div>
</body>
</html>