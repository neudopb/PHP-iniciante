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
            $dia = isset($_GET["ds"])?$_GET["ds"]:0;

            switch($dia){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Estudar";
                    break;
                case 7:
                case 1:
                    echo "Descansar";
                    break;
                default:
                    echo "Dia da semana invalido";
            }
        ?>
    </div>
</body>

</html>