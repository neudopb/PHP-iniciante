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
            do{
                echo "$c ";
                $c++;
            }while($c <= 10);

            echo "<br><br>";
            
            $c = 10;
            do{
                echo "$c ";
                $c--;
            }while($c >= 1);
        ?>
    </div>
</body>

</html>