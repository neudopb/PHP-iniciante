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
            $pos = strpos($frase, "PHP");
            echo "$frase <br>A string foi encontrada na posição $pos";

            $pos = stripos($frase, "php");
            echo "<br><br>$frase <br>A string foi encontrada na posição $pos";
        ?>
    </div>
</body>

</html>