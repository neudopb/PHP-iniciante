<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <a href="formulario.html">Voltar</a><br><br>
        <?php
            $nome = isset($_POST["nome"])?$_POST["nome"]:"[Não Informado]";
            $ano = isset($_POST["ano"])?$_POST["ano"]:0;
            $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"[Sem Sexo]";

            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade anos.";
        ?>
    </div>
</body>

</html>