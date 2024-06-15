<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            //Cotação vinda da API do Banco Central - dadosabertos.bcb.gov.br
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados["value"][0]["cotacaoCompra"];

            $real = $_REQUEST["carteira"] ?? 0;
            $dolar = $real / $cotação;
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //Biblioteca intl (Internallization PHP)

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong>!</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#8678 Voltar</button>
    </main>
</body>
</html>