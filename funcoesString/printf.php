<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $prod = "leite";
            $preco = 4.5;
            
            printf("O %s está custando R$ %.2f", $prod, $preco);
        ?>
    </div>
</body>

</html>