<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="get" action="exe003.php">
        <select name="num" id="num">
            <?php
                for($num= 0; $num <=9; $num++){
                    print "<option>$num</option> <br>";
                } 
            ?> 
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>