<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php     
    $nome = "Manuelly Aparecida dos Santos";
    $sobrenome = "Camponêz";

    switch($nome){
        case "Thiago Henrique dos Santos":
            echo "$nome $sobrenome";
            break;
        case "Laís Aparecida":
            echo "Laís Aparecida $sobrenome";
            break;
        default:
            echo "Sr.(a) $sobrenome";
            break;
    }
    ?>


</body>
</html>