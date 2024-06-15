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
            $num = $_GET["num"] ?? 0;
            
            // Separar a parte inteira e a parte fracionária
            $parte_inteira = floor($num);
            $parte_fracionaria = fmod($num, 1);
            
            // Formatando a parte inteira com separador de milhares
            $parte_inteira_formatada = number_format($parte_inteira, 0, ',', '.');
            // Formatando a parte fracionária com três casas decimais
            $parte_fracionaria_formatada = number_format($parte_fracionaria, 3, ',', '.');
            
            // Montando a frase de análise
            $frase_analise = "Analisando o número <strong>" . $parte_inteira_formatada . ',' . substr($parte_fracionaria_formatada, 2) . "</strong> informado pelo usuário:<br><br>";
            
            echo $frase_analise;
            echo "\u{1F784} A parte inteira do número é <strong>" . $parte_inteira_formatada . "</strong><br>";
            echo "\u{1F784} A parte fracionária do número é <strong>" . $parte_fracionaria_formatada . "</strong>";
        ?>
        <br><br>
        <input type="submit" value=" &#8678 Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>
