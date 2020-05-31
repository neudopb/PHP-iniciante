<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $c = 1;
            while($c <= 10){
                echo $c ."<br>";
                $c++;
            }
            echo "<br><br>";
            $c = 10;
            while($c >= 1){
                echo $c ."<br>";
                $c--;
            }
        ?>
    </div>
</body>

</html>