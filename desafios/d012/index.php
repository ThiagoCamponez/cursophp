<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimenta
        $totalSegundos = $_GET["totalSegundos"] ?? 0;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="totalSegundos">Qual é o total de segundos? (R$)</label>
            <input type="number" name="totalSegundos" id="totalSegundos" value="<?=$totalSegundos?>">

            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php

            $semanas = $totalSegundos / 604800;
            $dias = $totalSegundos % 604800 / 86400;
            $horas = floor($totalSegundos % 604800 / 3600);
            $minutos = floor($totalSegundos % 604800 % 86400 % 3600 / 60);
            $segundos = floor($totalSegundos % 604800 % 86400 % 3600 % 60);
            
            echo "Analizando o valor que você digitou, <strong>" . number_format($totalSegundos, 0, ',', '.') . " segundos</strong> equivalem a um total de:";
            
            echo "<ul><li><strong>" . number_format($semanas, 0, ',', '.') . "</strong> semanas</li>";
            echo "<li><strong>" . number_format($dias, 0, ',', '.') . "</strong> dias</li>";
            echo "<li><strong>" . number_format($horas, 0, ',', '.') . "</strong> horas</li>";
            echo "<li><strong>" . number_format($minutos, 0, ',', '.') . "</strong> minutos</li>";
            echo "<li><strong>" . number_format($segundos, 0, ',', '.') . "</strong> segundos</li></ul>";
            
            

        ?>
    </section>
</body>
</html>