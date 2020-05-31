<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            function soma(){
                $p = func_get_args();
                $tot = func_num_args();
                $s = 0;

                for($i = 0; $i < $tot; $i++){
                    $s += $p[$i];
                }

                return $s;
            }

            $res = soma(8,4,7,3,1);

            echo "<br>A soma dos valores é $res";
        ?>
    </div>
</body>

</html>