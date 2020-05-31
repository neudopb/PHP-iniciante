<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $preco = $_GET['a'];
            $preco2 = $preco;
            echo "Valor do produto: R$" . number_format($preco, 2, ",", ".");
            $preco += $preco * 10 / 100;
            echo "<br>Valor com aumento de 10%: R$" . number_format($preco, 2, ",", ".");
            $preco2 -= $preco2 * 10 / 100;
            echo "<br>Valor com desconto de 10%: R$" . number_format($preco2, 2, ",", ".");
        ?>
    </div>
</body>

</html>