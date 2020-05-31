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
                echo "<p>A soma vale $s</p>";
            }    

            soma(5,5);
            soma(7,4);
            soma(12,11);
        ?>
    </div>
</body>

</html>