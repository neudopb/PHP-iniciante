<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $an = $_GET["an"];
            $idade = 2020 - $an;
            echo "Quem nasceu em $an tem $idade anos de idade<br>";

            $tipo = ($idade >= 18 && $idade < 65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
            echo "Seu voto é $tipo";
            
        ?>
    </div>
</body>

</html>