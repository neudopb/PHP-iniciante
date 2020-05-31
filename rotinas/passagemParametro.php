<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            #Passagem de parametro por valor
            function teste1($x){
                $x += 2;
                echo "<p>O valor de x é $x</p>";
            } 
            $a = 3;
            teste1($a);
            echo "<p>O valor de a é $a</p>";

            echo "<br><br>";

            #Passagem de parametro por referencia
            function teste2(&$y){
                $y += 2;
                echo "<p>O valor de y é $y</p>";
            }
            $b = 3;
            teste2($b);
            echo "<p>O valor de b é $b</p>";

        ?>
    </div>
</body>

</html>