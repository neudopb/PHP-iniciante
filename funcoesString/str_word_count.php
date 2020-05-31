<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $txt = "Eu estou estudando PHP";
            $cont = str_word_count($txt, 0);
            echo $cont;
            echo "<br><br>";

            $cont = str_word_count($txt, 1);
            print_r($cont);
            echo "<br><br>";

            $cont = str_word_count($txt, 2);
            print_r($cont);
        ?>
    </div>
</body>

</html>