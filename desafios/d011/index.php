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
        $preçoProduto = $_REQUEST["preçoProduto"] ?? 0;
        $percReajuste = $_REQUEST["percReajuste"] ?? 0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="preçoProduto">Preço do Produto (R$)</label>

            <input type="number" name="preçoProduto" id="preçoProduto" min= "0.10" step="0.10" value="<?=$preçoProduto?>">

            <label for="percReajuste">Qual será o percentual de reajuste? (<strong><span id="p"><?=$percReajuste?></span>%</strong>)</label>

            <input type="range" name="percReajuste" id="percReajuste" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">

        </form>
    </main>
    <?php
            
            $aumento = $preçoProduto * $percReajuste / 100;
            $novoPreço = $preçoProduto + $aumento;
            
        ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=$preçoProduto?>, com <strong><?=$percReajuste?>%</strong> de aumento, vai passar a custar <strong>R$<?=number_format($novoPreço, 2, ',', '.')?></strong> a partir de agora.</p>
        
    </section>
    <script>
        
        mudaValor();

        function mudaValor(){
            p.innerText = percReajuste.value;
        }

    </script>
</body>
</html>