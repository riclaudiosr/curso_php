<html>
<title>Curso php</title>
    <head>
        <body>
            <?php
            $d = isset($_GET['ds'])? $_GET['ds']:0;
            switch($d){
                case 2:
                    $d = 'segunda feira';
                case 3:
                    $d = 'tersa feira';
                case 4:
                    $d = 'quarta feira';
                case 5:
                    $d = 'quinta feira';
                case 6:
                    $d = 'sexta feira';
                    echo ' levante vai estudar hoje e ' .$d;
                    break; 
                case 1:
                case 7:
                    $d = 'fim de semana';
                    echo 'Dia de descansar hoje e '.$d;
                    break;
                    default:
                    echo'Dia da semana invalida';
                    
            }

            ?>

            <br/><a href="exe002.html">Voltar</a>
        </body>
    </head>
</html>