<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            margin-left: 20px;
            font-size: 1em;
        }
        h2{
            font-weight: bolder;
        }
        h3{
            font-family: Arial, Helvetica, sans-serif;
            color: green;
        }
    </style>
    <title>01 exercicio de php</title>

</head>
<body>
    <h1> primeiro programa</h1>
    <?php
    echo "Ola Mundo!";
    ?>

    <h2>Variaveis em php</h2>
    <?php 
    /*
   echo " variaveis em php <br> <br>";

        $nome= "nome";
        $numero = 20;
        $numero_pont = 15.6;
        $verdadeiro = false;

        echo $nome ." string <br>", $numero. " inteiro <br>",
         $numero_pont. " real <br>", $verdadeiro. " verdadeiro ou false boleano";

       //echo "$nome e Stringe, $numero e inteiro, $numero_pont e real, $verdadeiro e boleano." 
        */
       ?>
       <h2>Operadores aritimetrico</h2><br>
       <?php
           /* $n1 = 8;
            $n2 = 4;
            $m = ($n1+$n2)/2;
            echo " A soma vale " . ($n1+$n2)."<br>";
            echo " A subitração vale ". ($n1-$n2)."<br>";
            echo " A multiplicação vale ". ($n1*$n2)."<br>";
            echo " A divisão vale ". ($n1/$n2)."<br>";
            echo " o modulo vale ". ($n1%$n2)."<br> <br>";

            echo "A média entre os valores é ".$m;
            */
        ?>
        <h2>Valores personalizados</h2>
        <?php
            /*
             $n1 = $_GET["a"];
             $n2 = $_GET["b"];
             $m = ($n1+$n2)/2;
             echo " A soma vale " . ($n1+$n2)."<br>";
             echo " A subitração vale ". ($n1-$n2)."<br>";
             echo " A multiplicação vale ". ($n1*$n2)."<br>";
             echo " A divisão vale ". ($n1/$n2)."<br>";
             echo " o modulo vale ". ($n1%$n2)."<br> <br>";
 
             echo "A média entre os valores é ".$m;
             */
        ?>
        <h2>Funções aritimetrica: abs(valor absoluto da variavel)</h2>
        <?php
        /*
           $v1 = $_GET["x"];
           $v2 = $_GET["y"];
           //echo " <h3>Valores recebido: $v1 e $v2 </h3>"
           echo" O valor absoluto de $v2 e ". abs($v2);
        */
        ?>
        <h2>Funções aritimetrica: pow(valor potenciação da variavel
            )</h2>
        <?php
        
           $v1 = $_GET["x"];
           $v2 = $_GET["y"];
           echo" potencição das variavel $v1<sup>$v2 </sup> e " . pow($v1,$v2);
        
        ?>
        <h2>Funções aritimetrica: sqrt(rais quadrada da variavel
            )</h2>
        <?php
           $v1 = $_GET["x"];
           $v2 = $_GET["y"];
           echo" rais da variavel $v2 e " . sqrt($v2);

        ?>
<h2>Funções aritimetrica: round(aredondamento dos valores das variaveis)</h2>
        <?php
           $v1 = $_GET["x"];
           $v2 = $_GET["y"];
           echo" arendondar a variavel $v2 e " . round($v2);// ceil(),floor() e in

        ?>/*
        <h2>Funções aritimetrica: intval(parte inteira dos valores das variaveis)</h2>
        <?php
           $v1 = $_GET["x"];
           $v2 = $_GET["y"];
           echo" parte inteira da variavel variavel $v2 e " .intval($v2);

        ?>

    </body>
</html>