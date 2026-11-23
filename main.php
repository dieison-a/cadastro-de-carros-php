<?php
include 'includes/Carro.class.php';

$fabricante = $_POST['fabricante'];
$modelo = $_POST['modelo'];
$preco = $_POST['preco'];

$carro = new Carro($fabricante, $modelo, $preco);
$classificacao = $carro->classificarCarro();
$informacoesPopular = $carro->exibirInformacoesPopular();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Classificação do carro</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado</h1>

        <p><strong>Classificação:</strong> <?= $classificacao; ?></p>
        <?= $informacoesPopular; ?>

        <p>
            <a href="index.html">Voltar ao formulário</a>
        </p>
    </main>
</body>

</html>
