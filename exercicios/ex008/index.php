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
        $meuSalario = $_GET["meuSalario"] ?? 0;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="salario">Salário (R$)</label>
            <input type="number" name="meuSalario" id="meuSalario" step="0.01" value="<?=$meuSalario?>">
            <p>Considerando o salário mínimo de <strong>R$1.412,00</strong></p>
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $salarioMinimo = 1412;
            $quantSalariosInt = floor($meuSalario / $salarioMinimo);
            $restoSalario = $meuSalario % $salarioMinimo;
            echo "<p>Quem recebe um salário de R$$meuSalario ganha <strong> $quantSalariosInt salários mínimos + </strong> R$$restoSalario </p>";
            
        ?>
    </section>
</body>
</html>