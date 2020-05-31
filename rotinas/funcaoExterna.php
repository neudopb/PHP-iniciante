<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            include "funcoes.php"; #include ou require = pode ser carregado mais de uma vez
                                #include_once ou require_once = vai ser carregado apenas uma vez
            ola();

            mostrarValor(5);
        ?>
    </div>
</body>

</html>