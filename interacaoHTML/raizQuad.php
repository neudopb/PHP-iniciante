<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="raizQuad.html">Voltar</a><br>
        <?php
            $v = $_GET["v"];
            $rq = sqrt($v);
            echo "A raiz quadrada de $v é igual a " . number_format($rq, 2);
        ?>
    </div>
</body>

</html>