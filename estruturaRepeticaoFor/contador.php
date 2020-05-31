<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            for($i = 0; $i <= 10; $i++){
                echo $i . " ";
            }    
            echo "<br><br>";

            for($i = 10; $i >= 0; $i--){
                echo "$i ";
            }
        ?>
    </div>
</body>

</html>