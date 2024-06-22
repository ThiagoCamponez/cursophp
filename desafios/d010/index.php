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
        $anoAtual = date('Y');
        $anoNasc = $_GET["anoNasc"] ?? 2000;
        $anoFinal = $_GET["anoFinal"] ?? $anoAtual;
    ?>
    <main>
        <h2>Calculando a sua Idade</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get"> 

            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" max="<?=$anoAtual?>" value="<?=$anoNasc?>">

            <label for="anoFinal">Quer saber sua Idade em que ano? (atualmente estamos em <?=$anoAtual?>)</label>
            <input type="number" name="anoFinal" id="anoFinal" value="<?=$anoFinal?>">


            <input type="submit" value="Qual será minha idade?">

        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            
            echo "Quem nasceu em $anoNasc vai ter <strong>" . ($anoFinal - $anoNasc) ." anos</strong> em $anoFinal!";
            
        ?>
    </section>
</body>
</html>