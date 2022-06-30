<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
      <title>operadores de atribuisao em php</title>
</head>
<body>
    <h1>atribuisao em php</h1>
   <?php
   /*  
    adiçao: $a = $a + $b              $a += $b 
    subtraçao: $a = $a - $b           $a -= $b 
    multiplicaçao: $a = $a * $b       $a *= $b 
    divisao: $a = $a  $b              $a /= $b 
    modulo: $a = $a + $b              $a %= $b 
    concaternasao: $a = $a . $a       $a .= $b
    */
    ?>
        <h1>exercicio</h1>

    <?php
    /*$preco  = $_GET["p"];
    echo " o preço do produto e R$  $preco" ;
    $preco = $preco +($preco*10/100);
    echo "<br/> O novo preço com 10% de almento será R$ $preco";

    */
    ?>
    <h2>valor formatado</h2>
    <?php
    /*
    $preco  = $_GET["p"];
    echo "<br/> o preço do produto e R$ ". number_format($preco, 2);
    $preco += $preco*10/100;
    echo "<br/> O novo preço com 10% de almento será R$ ". number_format($preco, 2);
    */
    ?>
    <h2>valor nao formatado</h2>
      <?php
      /*
    $preco  = $_GET["p"];
    echo "<br/> <br/>o preço do produto e R$  $preco" ;
    $preco += $preco*10/100;
    echo "<br/> O novo preço com 10% de almento será R$ $preco";
    */
    ?>
    <h1>operadores de alto incremento</h1>

    <h2>exercicio</h2>
    <?php
    /*
    $atual =$_GET["aa"];
    echo "<br/> o ano atual e $atual e o ano anterior e " .--$atual;
    */
    ?>
    <h1>Variaveis referenciadas</h1>
    <h2>Exercicio</h2>
    <?php
    /*
    $a = 3;
    $b = $a;
    $b += 5;
    echo "variavel a = ". $a ;
    echo "<br> variavel b = " .$b;

    $a = 3;
    $b = &$a;
    $b += 5;
    echo "<br/> <br/>variavel a = ". $a ;
    echo "<br> variavel b = " .$b;
    */
    ?>
    <h1>variaveis de variaves</h1>
    <?php
    $site = "CURSO";
    $$site = "CURSOPHP";
    echo" a variavel criada foi " .$site;
    echo "<br/> o valor da variavel e " .$$site;
    ?>
    
    </body>
</html>