<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $nome = "Neudinho";
            $novo = str_pad($nome, 20, "-", STR_PAD_RIGHT);
            echo "Nome: $novo Paulino<br>";

            $novo = str_pad($nome, 20, "-", STR_PAD_LEFT);
            echo "Nome: $novo Paulino<br>";

            $novo = str_pad($nome, 20, "-", STR_PAD_BOTH);
            echo "Nome: $novo Paulino<br>";
        ?>
    </div>
</body>

</html>