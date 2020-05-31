<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $frase = "Gosto de estudar Java";
            echo "$frase <br>";
            $novaFrase = str_replace("Java", "PHP", $frase);
            echo "$novaFrase <br>";
            $novaFrase = str_ireplace("java", "PHP", $frase);
            echo $novaFrase;
        ?>
    </div>
</body>

</html>