<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
        $texto = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tamanho = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
    <style>
        span.texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>

<body>
    <div>
        <a href="edicaoText.html">Voltar</a><br><br>
        <?php
            echo "<span class='texto'>$texto</span>";
        ?>
    </div>
</body>

</html>