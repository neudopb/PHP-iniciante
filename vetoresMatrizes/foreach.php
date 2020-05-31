<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <pre>
            <table border="1"><tr>
            <?php
                $vet = range(0,50,5);
                
                foreach($vet as $n){
                    echo "<td>$n</td>";
                }
            ?>
            </tr></table>
        </pre>
    </div>
</body>

</html>