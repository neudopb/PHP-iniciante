<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];

            echo "Os valores passados foram $n1 e $n2 <br>";
            $tipo = ($tipo == "s")?$n1+$n2:$n1*$n2;
            echo "O resultado será $tipo"; 
        ?>
    </div>
</body>

</html>