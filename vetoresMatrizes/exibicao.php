<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <pre>
            <?php
                $v = array("G", "K", "S", "N", "C");
                echo "O vetor tem ". count($v) . " elementos.<br><br>";
                print_r($v);
                echo "<br>";
                var_export($v);
                echo "<br><br>";
                var_dump($v);
            ?>
        </pre>
    </div>
</body>

</html>