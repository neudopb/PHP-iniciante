<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $a = 3;
            $b = $a;
            $b += 5;
            echo "Sem referencia:";
            echo "<br>A = $a";
            echo "<br>B = $b";

            $a = 3;
            $b = &$a;
            $b += 5;
            echo "<br><br>Com referencia:";
            echo "<br>A = $a";
            echo "<br>B = $b";
        ?>
    </div>
</body>

</html>