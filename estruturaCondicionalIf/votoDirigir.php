<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="votoDirigir.html">Voltar</a><br><br>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:2020;
            $idd = date("Y") - $a;
            echo "Você nasceu em $a e tem $idd anos.<br>";

            if($idd >= 18){
                $v = "já pode votar";
                $d = "já pode dirigir";
            }else{
                $v = "não pode votar";
                $d = "não pode dirigir";
            }

            echo "Com essa idade você $v e tambem $d.";
        ?>
    </div>
</body>

</html>