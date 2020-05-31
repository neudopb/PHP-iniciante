<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="caixaTexto.html">Voltar</a><br><br>
        <?php
            $i = 1;
            while($i <= 5){
                $v = "num$i";
                $vl = "v$i";
                $$v = isset($_GET[$vl])?$_GET[$vl]:0;

                echo "Valor $i: ". $$v . "<br>";

                $i++;
            }
        ?>
    </div>
</body>

</html>