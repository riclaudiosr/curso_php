<html>
<title>Curso php</title>
    <head>
        <body>
            <?php
            $d = isset($_GET['ds'])? $_GET['ds']:0;
            switch($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo ' levante vai estudar';
                    break;
                case 1:
                case 7:
                    echo 'Dia de descansar';    
            }

            ?>

            <br/><a href="exe003.html">Voltar</a>
        </body>
    </head>
</html>