<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <form method="GET" action="tabuadaResult.php">
            <label>Numero: </label>
            <select name="num">
                <?php
                    $i = 1;
                    do{
                        echo "<option value='$i'>$i</option>";
                        $i++;
                    }while($i <= 10);
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>

</html>