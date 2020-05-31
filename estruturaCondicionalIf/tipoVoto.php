<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="tipoVoto.html">Voltar</a><br><br>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:2020;
            $idd = date("Y") - $a;
            echo "Você nasceu em $a e tem $idd anos.<br>";

            if($idd < 16){
                $tipoV = "não vota";
            }elseif(($idd >= 16 && $idd < 18) || $idd > 65){
                $tipoV = "voto opcional";
            }else{
                $tipoV = "voto obrigatorio";
            }

            echo "Para essa idade, $tipoV";
        ?>
    </div>
</body>

</html>