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
                $v[] = "Z"; //add elemento no fim do vetor
                print_r($v);
                unset($v[0]); //remover elemento no vetor
                print_r($v);

                //Geralmente usado em pilhas
                array_push($v, "X"); //add elemento no fim do vetor
                print_r($v);
                array_pop($v); //remover elemento no fim do vetor
                print_r($v);

                array_unshift($v, "G"); //add elemento no inicio do vetor
                print_r($v);
                array_shift($v); //remover elemento no inicio do vetor
                print_r($v);
            ?>
        </pre>
    </div>
</body>

</html>