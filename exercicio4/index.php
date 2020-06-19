<?php include("ui_comp_formulario.php"); ?>

<?php
//true para ativar validação javaScript - depois de aletar é necessário dar Refresh na página
$form = new UI_Comp_Formulario(true);
$formParams = array(
    array("type" => "text", "label" => "Data", "name" => "date",  "id" => "date", "placeholder" => "mm-dd-yyyy"),
    array("type" => "text", "label" => "Texto", "name" => "text",  "id" => "text", "placeholder" => "Text"),
    array("type" => "checkbox", "label" => "Checkbox", "name" => "checkbox",  "id" => "checkbox", "placeholder" => "Text"),
    array("type" => "textarea", "label" => "Texto Grande", "name" => "bigtext",  "id" => "bigtext", "placeholder" => "bigtext")
);
if ($_POST['date'] && $_POST['text'] && $_POST['bigtext']) {
    if ($form->validate($_POST)) {
        echo "<script>alert('true : Validado com sucesso')</script>";
        echo "<script>teste();</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $_SERVER['REQUEST_URI'] . '">';
        exit;
    } else {
        echo "<script>alert('false : Erro ao Validar')</script>";
    };
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index2.css">
    <title>Exercicio 4</title>
</head>

<body>
    <header>
        <div class="col-5">
            Formulário de teste
        </div>
    </header>
    <div id="container">
        <div class="section-container row">
            <div class="form-box col-5">
                <form action="" id="myForm" method="post" onsubmit="return checkForm(this, <?php echo $form->getValidateScript(); ?>)">
                    <div>
                        <?php $form->renderer($formParams); ?>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="section-container">Formulario de teste</div>
    </div>
    <script src="./js/index.js"></script>
</body>

</html>