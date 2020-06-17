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
        $form = new UI_Comp_Formulario(true);
        $fields = array(
            array("label" => "Data", "name" => "data", "id" => "data", "placeholder" => "mm-dd-yyyy"),
            array("label" => "Texto", "name" => "texto", "id" => "texto", "placeholder" => "Texto de até x caracteres")
        );
        if ($_POST['data'] || $_POST['texto']) {
            $form->validate($_POST);
        }
        ?>
        <div>
            <form action="" id="myForm" method="post" onsubmit="return checkForm(this, <?php echo $form->validateScript ?>)">
                <div>
                    <?php $form->renderer($fields); ?>
                    <button type="submit">enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./index.js"></script>
</body>

</html>