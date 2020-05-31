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
                $m = array( array(2,3), 
                            array(1,4), 
                            array(9,5));
                            
                $m[2][0] = $m[1][0];
                print_r($m);
            ?>
        </pre>
    </div>
</body>

</html>