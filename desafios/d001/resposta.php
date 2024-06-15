<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $number = $_GET["number"] ?? 0;
                echo "O número escolhido foi, <strong>$number</strong>!";
                echo "<br> O seu <em>antecessor</em> é " . $number - 1;
                echo "<br> E o seu <em>sucessor</em> é " . $number + 1;
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#8678 Voltar</button>
    </main>
</body>
</html>