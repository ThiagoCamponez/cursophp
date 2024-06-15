<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["num"] ?? 0;
            
            //Parte inteira e a parte fracionária
            $parte_inteira = floor($num);
            $parte_fracionaria = fmod($num, 1);            
            
            $int_form = number_format($parte_inteira, 0, ',', '.');            
            $frac_form = number_format($parte_fracionaria, 3, ',', '.');
            
            echo "<p>Analisando o número <strong>" . $int_form . ',' . substr($frac_form, 2) . "</strong> informado pelo usuário:</p>";
            
            echo "<ul><li> A parte inteira do número é <strong>" . $int_form . "</strong></li>";
            echo "<li> A parte fracionária do número é <strong>" . $frac_form . "</strong></ul></li>";
        ?>
        <br><br>
        <input type="submit" value=" &#8678 Voltar" onclick="javascript:window.location.href='index.html'">
    </main>
</body>
</html>
