

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
        $valorSaque = $_GET["valorSaque"] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="valorSaque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valorSaque" id="valorSaque" value="<?=$valorSaque?>">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">

        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($valorSaque, 2, ',', '.')?> realizado</h2>
        <?php
            echo "O caixa eletrônico vai te entregar as seguintes notas:";

            $notas100 = floor($valorSaque / 100);
            $notas50 = floor(($valorSaque % 100) / 50);
            $notas10 = floor(($valorSaque % 100 % 50) / 10);
            $notas5 = floor(($valorSaque % 100 % 50 % 10) / 5);
            
            echo "<ul><li>R$100 x$notas100</li>";
            echo "<li>R$50 x$notas50</li>";
            echo "<li>R$10 x$notas10</li>";
            echo "<li>R$5 x$notas5</li></ul>";

        ?>
    </section>
</body>
</html>