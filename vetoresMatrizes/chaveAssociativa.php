<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            $v = array("nome" => "Neudo", "idade" => 20, "peso" => 60.5);
            $v["bebe"] = true;
            
            foreach($v as $k => $c){
                echo "$k : $c <br>";
            }
        ?>
    </div>
</body>

</html>