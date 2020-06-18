<?php include("ui_comp_formulario.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="conteudo">
        <?php
        //não esquecer de ativar
        $form = new UI_Comp_Formulario(true);
        $formParams = array(
            array("type" => "text", "label" => "Data", "name" => "date",  "id" => "date", "placeholder" => "mm-dd-yyyy"),
            array("type" => "text", "label" => "Texto", "name" => "text",  "id" => "text", "placeholder" => "Text"),
            array("type" => "checkbox", "label" => "Texto", "name" => "text",  "id" => "text", "placeholder" => "Text"),
            array("type" => "textarea", "label" => "Texto Grande", "name" => "bigtext",  "id" => "bigtext", "placeholder" => "bigtext")
        );
        if ($_POST['date'] || $_POST['text']) {
            echo $form->validate($_POST);
        }
        ?>
        <div>
            <form action="" id="myForm" method="post" onsubmit="return checkForm(this, <?php echo $form->validateScript ?>)">
                <div>
                    <?php $form->renderer($formParams); ?>
                    <button type="submit">enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./index.js"></script>
</body>

</html>