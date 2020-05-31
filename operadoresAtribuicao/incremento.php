<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $ano = $_GET['a'];
            echo "O ano atual é $ano e o ano anterior é " . --$ano;
        ?>
    </div>
</body>

</html>