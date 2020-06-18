<?php
function readJsFile()
{
    // Abre o Arquvio no Modo r (para leitura)
    $arquivo = fopen('./index.js', 'r');
    while (!feof($arquivo)) {
        $linha = fgets($arquivo, 1024);
        echo $linha . '<br />';
    }
    fclose($arquivo);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <header>
            <button class="btn btn-primary btn-sm" onclick="desapear()">Desaparecer com o elemento</button>
            <button class="btn btn-primary btn-sm" onclick="apear()">Aparecer com o elemento</button>
            <button class="btn btn-primary btn-sm" onclick="cleanContent()">Apagar Conteúdo</button>
            <button class="btn btn-primary btn-sm" onclick="newContent('Conteúdo alterado')">Alterar Conteúdo</button>
            <button class="btn btn-success btn-sm" onclick="convertJsTo('vanilla')">Converter to vanillaJs</button>
            <button class="btn btn-success btn-sm" onclick="convertJsTo('jquery')">Converter to Jquery</button>
        </header>
        <section>
            <div class="testando alert alert-primary" style="margin-top: 20px;" role="alert">
                Clique nos botões para ver funcionando
            </div>
            <div class="card" style="width: 100%; margin-top: 20px;">
                <div class="card-body">
                    <h5 class="card-title">leitura do Arquivo index.js</h5>
                    <p class="card-text"><?php readJsFile(); ?></p>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</body>

</html>