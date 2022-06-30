
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Enquanto</title>
</head>
<body>
    <?php
    echo"Contagem Progressiva <br>";
    $c = 1;
        do {
        echo $c ."<br>";
        $c+=2;
          }
        while($c <= 30);
    echo"<br>";
    ?>
    <?php
        echo"Contagem Regressiva <br>";
        $c = 30;
        do{
            echo "$c<br>";
            $c-=2;
        }
        while($c>= 1);

    ?>
</body>
</html>
