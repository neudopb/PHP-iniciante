<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
    <style>
        span{ 
            color: red;
        }
    </style>
</head>

<body>
    <div>
        <a href="situacaoNota.html">Voltar</a><br><br>
        <?php
            $n1 = number_format((isset($_GET["nota1"])?$_GET["nota1"]:0),1);
            $n2 = number_format((isset($_GET["nota2"])?$_GET["nota2"]:0),1);
            $m = number_format((($n1 + $n2) / 2),1);

            if($m >= 7){
                $sit = "APROVADO";
            }else if($m >= 5 && $m < 7){
                $sit = "RECUPERAÇÃO";
            }else{
                $sit = "REPROVADO";
            }

            echo "A média entre <span>$n1</span> e <span>$n2</span> é igual a <span>$m</span><br>";
            echo "Situação do aluno: <span>$sit</span>";
        ?>
    </div>
</body>

</html>