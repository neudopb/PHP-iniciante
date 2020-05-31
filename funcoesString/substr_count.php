<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $frase = "Estou estudando PHP no curso de PHP";
            $cont = substr_count($frase, "PHP");
            echo "$frase <br>PHP encontrado $cont vezes";
        ?>
    </div>
</body>

</html>