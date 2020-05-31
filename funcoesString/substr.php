<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $frase = "Estou estudando PHP";
            $sub = substr($frase, 0, 5);
            echo "$sub <br>";

            $sub = substr($frase, 6);
            echo "$sub <br>";

            $sub = substr($frase, -3);
            echo "$sub <br>";

            $sub = substr($frase, -3, 1);
            echo "$sub <br>";
        ?>
    </div>
</body>

</html>