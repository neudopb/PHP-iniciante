<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $v1 = $_GET['a'];
            $v2 = $_GET['b'];

            echo "<h3>Valores digitados: $v1 e $v2</h3>";
            echo "- O valor absoluto de $v2 é " . abs($v2);
            echo "<br>- A potenciação de $v1<sup>$v2</sup> é " . pow($v1, $v2);
            echo "<br>- A raiz quadrada de $v1 é " . sqrt($v1);
            echo "<br>- O valor arredondado de $v2 é " . round($v2); //ceil (pra cima) floor(pra baixo)
            echo "<br>- A parte inteira de $v2 é " . intval($v2);
            echo "<br>- O valor formatado de $v1 é R$" . number_format($v1, 2, ",", ".");
        ?>
    </div>
</body>

</html>