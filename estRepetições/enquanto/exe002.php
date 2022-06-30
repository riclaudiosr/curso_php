
    <?php
    $v = isset($_GET['n1'])?$_GET['n1']:1;
    // echo"<h1>Calculando o fatorial de $v <h1>";        
    $c = $v;
    $fat=1;
    do{
        $fat= $fat*$c;
        $c--;
    while($c>=1);
    echo"<h2> $v!= $fat <br>" ;
   
    ?> 
   <p> <a href="./exe002.html">Voltar</a></p>