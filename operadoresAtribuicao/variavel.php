<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $teste = "variavel";
            $$teste = "variavelDeVariavel";

            echo $teste;
            echo "<br>$variavel";
        ?>
    </div>
</body>

</html>