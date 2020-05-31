<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            function soma($a, $b){
                $s = $a + $b;
                return $s;
            }

            $res = soma(5,3);
            echo "A soma vale $res";
        ?>
    </div>
</body>

</html>