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
                $vet = array(1=>"A", 3=>"B", 7=>"C", 9=>"D");
                $vet[] = "E";
                unset($vet[3]);
                print_r($vet);
            ?>
        </pre>
    </div>
</body>

</html>