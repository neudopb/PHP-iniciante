<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $a = 7;
            $b = "7";
            $r = ($a == $b)?"SIM":"NÃO";
            echo "As variaveis A e B são iguais? $r <br>"; 

            $r = ($a === $b)?"SIM":"NÃO";
            echo "As variaveis A e B são identicas? $r";

        ?>
    </div>
</body>

</html>