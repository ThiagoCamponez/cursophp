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
        $totalSegundos = $_REQUEST["totalSegundos"] ?? 0;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="totalSegundos">Qual é o total de segundos? (R$)</label>
            <input type="number" name="totalSegundos" id="totalSegundos" value="<?=$totalSegundos?>">

            <input type="submit" value="Calcular">

        </form>
    </main>
    <?php
            // Minha Lógica:
            // $semanas = $totalSegundos / 604800;
            // $dias = $totalSegundos % 604800 / 86400;
            // $horas = floor($totalSegundos % 604800 % 86400 /3600);
            // $minutos = floor($totalSegundos % 604800 % 86400 % 3600 / 60);
            // $segundos = floor($totalSegundos % 604800 % 86400 % 3600 % 60);

            $total = $totalSegundos;
            $sobra = $total;
            //Total de Semanas
            $semana = (int) ($sobra / 604_800);
            $sobra = $sobra % 604_800;
            //Total de Dias
            $dia = (int) ($sobra / 86_400);
            $sobra = $sobra % 86_400;
            //Total de Horas
            $hora = (int) ($sobra / 3_600);
            $sobra = $sobra % 3_600;
            //Total de Minutos
            $minuto = (int) ($sobra / 60);
            $sobra = $sobra % 60;
            //Total de Segundos
            $segundo = $sobra;
        ?>
    <section>
        <h2>Totalizando Tudo</h2>
           <p>Analisando o valor que você digitou, <strong><?=number_format($totalSegundos, 0, ',', '.');?> segundos</strong> equivalem a um total de:</p>
           <ul>
               <li><?= $semana; ?> Semanas</li>
               <li><?= $dia; ?> Dias</li>
               <li><?= $hora; ?> Horas</li>
               <li><?= $minuto; ?> Minutos</li>
               <li><?= $segundo; ?> Segundos</li>
           </ul>
    </section>
</body>
</html>