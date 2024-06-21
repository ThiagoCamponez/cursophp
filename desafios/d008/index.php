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
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="numero">Número (R$)</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">

        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            echo "Analisando o <strong> número $numero</strong>, temos:";

            echo "<ul><li>A sua raiz quadrada é: <strong>" . number_format(sqrt($numero) , 3, ',', '.') . "</strong></li>";
            echo "<li>A sua raiz cúbica é: <strong>" . number_format($numero ** (1/3) , 3, ',', '.') . "</strong></ul></li>";
        ?>
    </section>
</body>
</html>