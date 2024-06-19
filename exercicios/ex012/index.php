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
        $preçoProduto = $_GET["preçoProduto"] ?? 0;
        $percReajuste = $_GET["percReajuste"] ?? 0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="preçoProduto">Preço do Produto (R$)</label>
            <input type="number" name="preçoProduto" id="preçoProduto" value="<?=$preçoProduto?>">

            <label for="percReajuste">Qual será o percentual de reajuste? (<span id="percentual"><?=$percReajuste?>%</span>)</label>
            <input type="range" min="0" max="100" class="slider" name="percReajuste" id="percReajuste" value="<?=$priPeso?>">


            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            
            $preçoReajustado = $preçoProduto + ($preçoProduto * $percReajuste / 100);

            echo "O produto que custava R$ ".number_format($preçoProduto, 2, ',', '.'). ", com <strong> $percReajuste% de aumento </strong>vai passar a custar <strong>R$ ".number_format($preçoReajustado, 2, ',', '.'). "</strong> a partir de agora.";
            
        ?>
    </section>
    <script>
        // JavaScript para atualizar o valor da porcentagem em tempo real
        const slider = document.getElementById('percReajuste');
        const percentual = document.getElementById('percentual');

        slider.oninput = function() {
            percentual.textContent = this.value;
        }
    </script>
</body>
</html>