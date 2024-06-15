<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //0x = Hexadecimal, 0b = Binário, 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // $v = true;
        // var_dump($v); //Mostra o tipo primitivo da variável
 
        // $num = (int) 3e2; // 3x10(2) coerção
        // echo "O valor é $num";
        // var_dump($num);

        $num = (float) "950"; // 950 entre aspas é String, mas o php deixa fazer a coerção para float!!
        var_dump($num);

        $casado = false;
        print "Esta pessoa é casada? $casado";
    ?>
</body>
</html>