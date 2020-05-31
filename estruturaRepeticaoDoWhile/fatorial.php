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
            $n = isset($_GET["num"])?$_GET["num"]:1;

            $f = 1;
            echo "$n! = ";
            do{
                $f *= $n;
                echo "$n x ";
                $n --;
            }while($n > 1);

            echo "1 = <span class='foco'>$f</span>";
        ?>
    </div>
</body>

</html>