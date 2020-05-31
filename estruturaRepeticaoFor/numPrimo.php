<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="numPrimo.html">Voltar</a><br><br>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:1;

            echo "Analisando o número $n ...<br><br>";
            echo "Valores múltiplos: ";

            $cont = 0;
            for($i = 1; $i <= $n; $i++){
                if($n%$i == 0){
                    echo "$i ";
                    $cont ++;
                }
            }

            echo "<br><br>Total de múltiplos: $cont<br><br>";
            echo "Resultado: $n ";
            if($cont > 2){
                echo "<span class='foco'>NÃO É PRIMO</span>";
            }else{
                echo "<span class='foco'>É PRIMO</span>";
            }
        ?>
    </div>
</body>

</html>