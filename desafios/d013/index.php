

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valorSaque = $_REQUEST["valorSaque"] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="valorSaque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valorSaque" id="valorSaque" step="5" value="<?=$valorSaque?>">
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">

        </form>
    </main>
    <?php 
        $resto = $valorSaque;
        //Saque de R$100
        $notas100 = floor($resto / 100);
        $resto %= 100;
        //Saque de R$50
        $notas50 = floor($resto / 50);
        $resto %= 50;
        //Saque de R$10
        $notas10 = floor($resto / 10);
        $resto %= 10;
        //Saque de R$5
        $notas5 = floor($resto / 5);
        $resto %= 5;
    
    ?>
    <section>
        <h2>Saque de R$<?=number_format($valorSaque, 2, ',', '.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <strong><?=$notas100?></strong></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <strong><?=$notas50?></strong></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <strong><?=$notas10?></strong></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <strong><?=$notas5?></strong></li>
        </ul>
    </section>
</body>
</html>