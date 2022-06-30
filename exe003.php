<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operadores unarios</title>
</head>
<body>
    <?php
    /*
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "os valores passados foram, $n1, e $n2 e o tipo foi $tipo<br/> ";
    $r = ($tipo == "s") ? $n1 + $n2: $n1*$n2;
    echo "O resultado será $r";
    */
    ?>
    <h2>Variaves iguais ou identicas</h2>
    <?php
    /*
    $a = 3;
    $b = "3";
    $sr = ($a ==$b)? "SIM": "NAO";
    echo "As variaveis A e B são iguais ? $sr <br/>";
    $sr = ($a ===$b)? "SIM": "NAO";
    echo "As variaveis A e B são identicas ? $sr";
    */
    ?> 
    <?php
    /*
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2;
    echo "A media entre $nota1 e $nota2 e a média e $m <br/>";
    $sit = ($m<6) ? "reprovado":"aprovado";
    echo "A situção do aluno e $sit";
    */
    ?>
    <?php
    /*
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2;
    echo "A media entre $nota1 e $nota2 e a média e $m <br/>";
    echo "A situção do aluno e ".(($m<6) ? "reprovado ":"aprovado "). $m." de media";
    */
    ?>
    <h1>Operadores logicos &&, //, xor e ! </h1>
    <?
    $ano = $_GET["an"];
    $idade = 2014 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade";
    $tipo = ($idade>=18 && $idade <65)?"Voto obrigatorio":"voto nao obrigatório";
    echo"Desa forma seu $tipo";

    ?>


</body>
</html>