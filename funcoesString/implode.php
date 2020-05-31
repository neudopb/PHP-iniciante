<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $v[0] = "exercicio";
            $v[1] = "de";
            $v[2] = "PHP";

            $txt = implode(" ", $v); #implode ou join
            echo $txt;
        ?>
    </div>
</body>

</html>