<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
</head>

<body>
    <div>
        <form method="get" action="tabuadaResult.php">
            <label>Numero: </label>
            <select name="num" required>
                <option></option>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>

</html>