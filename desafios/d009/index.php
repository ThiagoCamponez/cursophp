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
        // Capturando os dados do Formulário Retroalimentado
        $priValor = $_GET["priValor"] ?? 0;
        $priPeso = $_GET["priPeso"] ?? 0;
        $segValor = $_GET["segValor"] ?? 0;
        $segPeso = $_GET["segPeso"] ?? 0;
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="priValor">1° Valor (R$)</label>
            <input type="number" name="priValor" id="priValor" value="<?=$priValor?>" required>

            <label for="priPeso">1° Peso (R$)</label>
            <input type="number" name="priPeso" id="priPeso" value="<?=$priPeso?>">

            <label for="segValor">2° Valor (R$)</label>
            <input type="number" name="segValor" id="segValor" value="<?=$segValor?>" required>

            <label for="segPeso">2° Peso (R$)</label>
            <input type="number" name="segPeso" id="segPeso" value="<?=$segPeso?>">

            <input type="submit" value="Calcular Médias">

        </form>
    </main>
    <section>
        <?php
            
            $mediaSimples  = ($priValor + $segValor) / 2;
            $mediaPonderada = ($priValor * $priPeso + $segValor * $segPeso) / ($priPeso + $segPeso);
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$priValor?> e <?= $segValor?>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a <?=number_format($mediaSimples, 2, ',', '.')?>.</li>
            <li>A <strong>Média Aritimética Ponderada</strong> com os pesos <?=$priPeso?> e <?=$segPeso?> é igual a <?=number_format($mediaPonderada, 2, ',', '.')?>.</li>
        </ul>
        

    </section>
</body>
</html>