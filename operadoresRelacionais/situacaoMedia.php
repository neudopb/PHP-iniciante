<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $m = ($n1 + $n2) / 2;

            echo "A media entre $n1 e $n2 é $m <br>";
            echo "A situação do aluno é " . (($m < 6)?"REPROVADO":"APROVADO");

        ?>
    </div>
</body>

</html>