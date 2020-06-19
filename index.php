<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./index-home.css">
    <title>Prova PHP</title>
</head>

<body>
    <header>
        <div class="title row">
            <div class="col-4"><img src="./logo-php.png" /></div>
            <div class="col-8">
                <h2>Prova Programador (PHP)</h2>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="menu-box row">
                <div class="col-6">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exercicio1" href="#" role="tab">Exercicio1</a>
                        <a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exercicio2" href="#" role="tab">Exercicio2</a>
                        <a class="list-group-item list-group-item-action" href="./exercicio3" role="tab">Exercicio3</a>
                        <a class="list-group-item list-group-item-action" href="./exercicio4" role="tab">Exercicio4</a>
                        <a class="list-group-item list-group-item-action" href="https://www.linkedin.com/in/enrique-bonifacio/" target="_blank" role="tab">Entre em contato</a>
                    </div>
                </div>
            </div>
            <footer>Enrique Bonifácio Leite - (31) 98485-4119</footer>
        </div>
    </section>
    <!-- Modal de respostas -->
    <?php include('./exercicio1.php') ?>
    <?php include('./exercicio2.php') ?>
    <!--------------------- -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>