<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            #trim
            $nome = "  Neudo Paulino  ";
            echo "$nome = ". strlen($nome);
            $novo = trim($nome);
            echo "<br>$novo = ". strlen($novo);
            echo "<br><br>";

            #ltrim
            $nome = "  Neudo Paulino  ";
            echo "$nome = ". strlen($nome);
            $novo = ltrim($nome);
            echo "<br>$novo = ". strlen($novo);
            echo "<br><br>";
            
            #rtrim
            $nome = "  Neudo Paulino  ";
            echo "$nome = ". strlen($nome);
            $novo = rtrim($nome);
            echo "<br>$novo = ". strlen($novo);
        ?>
    </div>
</body>

</html>