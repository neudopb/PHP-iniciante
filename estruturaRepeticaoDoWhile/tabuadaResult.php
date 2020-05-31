<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="javascript:history.go(-1)">Voltar</a><br><br>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;

            echo "<h3>Tabuada de $n</h3>";

            $i = 1;
            do{
                echo "$n x $i = " . ($n*$i) . "<br>";
                $i++;
            }while($i <= 10);
        ?>
    </div>
</body>

</html>