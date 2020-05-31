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
                 $n = array(5,1,9,7,6,8,1);
                print_r($n);

                //Ordenação normal
                sort($n);
                print_r($n);            
                
                rsort($n);
                print_r($n);

                $vt = array(5,4,9,2,3,0,6);
                print_r($vt);

                //Ordenação associativa
                asort($vt);
                print_r($vt);

                arsort($vt);
                print_r($vt);

                //Ordenação por indice
                ksort($vt);
                print_r($vt);

                krsort($vt);
                print_r($vt);
               
            ?>
        </pre>
    </div>
</body>

</html>