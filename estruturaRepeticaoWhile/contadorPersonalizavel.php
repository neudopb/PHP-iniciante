<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="javascript:history.go(-1)">Voltar</a><br><br>
        <?php
            $i = isset($_GET["inicio"])?$_GET["inicio"]:0;
            $f = isset($_GET["fim"])?$_GET["fim"]:0;
            $inc = isset($_GET["incremento"])?$_GET["incremento"]:0;

            if($i < $f){
                $c = $i;
                while($c <= $f){
                    echo $c . " ";
                    $c+= $inc;
                }
            }else{
                $c = $i;
                while($c >= $f){
                    echo $c . " ";
                    $c-= $inc;
                }
            }
            
        ?>
    </div>
</body>

</html>