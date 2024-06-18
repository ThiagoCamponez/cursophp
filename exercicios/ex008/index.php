<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 0;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">

            <input type="submit" value="Analisar">

        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            $divisao = $dividendo / $divisor;
            echo "<h1><strong>$dividendo / $divisor = $divisao</strong></h1>";
            echo "<p>$dividendo ----> $divisor </p>";
            echo "<p>Quociente da Divisão: " . floor($dividendo / $divisor) . "</p>";
            echo "<p>Resto da Divisão: " . $dividendo % $divisor . "</p>";
        ?>
    </section>
</body>
</html>