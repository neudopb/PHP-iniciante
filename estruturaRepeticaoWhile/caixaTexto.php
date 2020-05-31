<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <form method="GET" action="caixaTexto2.php">
            <?php
                $c = 1;
                while($c <= 5){
                    echo "Valor $c <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>