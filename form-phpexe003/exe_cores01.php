<html>
<head>
    <?php
        $txt = isset($_GET['t'])?$_GET['t']:'text generico';
        $tam = isset($_GET['tam'])?$_GET['tam']:'12pt';
        $cor = isset($_GET['c'])?$_GET['c']:'sem cor';
        $corf =isset($_GET['cf'])?$_GET['cf']:'sem cor';
    ?>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>persoalizar script</title>
    <style>
        span.texto{
            
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
            background-color: <?php echo $corf; ?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<span class='texto'>$txt </span>";
        
    ?>
    
</body>
</html>