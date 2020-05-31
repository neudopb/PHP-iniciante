<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="operacaoNum.html">Voltar</a><br><br>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $op = isset($_GET["oper"])?$_GET["oper"]:1;

            switch($op){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = pow($n,3);
                    break;
                case 3:
                    $r = sqrt($n);
            }

            echo "O resultado da operação solicitada foi <span class=foco>$r</span>";
        ?>
    </div>
</body>

</html>