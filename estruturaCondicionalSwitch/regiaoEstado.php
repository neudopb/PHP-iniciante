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
            $est = isset($_GET["estado"])?$_GET["estado"]:"";
            
            switch($est){
                case "AC":
                case "AM":
                case "AP":
                case "PA":
                case "RO":
                case "RR":
                case "TO":
                    echo "Você mora na região <span class='foco'>Norte</span>";
                    break;
                case "AL":
                case "BA":
                case "CE":
                case "MA":
                case "PE":
                case "PI":
                case "PB":
                case "RN":
                case "SE":
                    echo "Você mora na região <span class='foco'>Nordeste</span>";
                    break;
                case "GO":
                case "MT":
                case "MS":
                case "DF":
                    echo "Você mora na região <span class='foco'>Centro-Oeste</span>";
                    break;
                case "PR":
                case "RS":
                case "SC":
                    echo "Você mora na região <span class='foco'>Sul</span>";
                    break;
                case "ES":
                case "MG":
                case "RJ":
                case "SP":
                    echo "Você mora na região <span class='foco'>Suldeste</span>";
                    break;
                default:
                    echo "Estado invalido";
            }
        ?>
    </div>
</body>

</html>