<?php

class UI_Comp_Formulario
{

    private $validateScript;

    function __construct($validateScript = false)
    {
        $this->validateScript = $validateScript;
    }

    function getValidateScript(){
        return $this->validateScript;
    }

    function validate($post)
    {
        if ($post['date'] == "" || $post['text'] == "") {
            return false;
        }

        $date = $post['date'];
        $text = $post['text'];
        $bigText = $post['bigtext'];

        if (!preg_match('/^(\d{2})-(\d{2})-(\d{4})$/', $date)) {
            return false;
        }

        if (!preg_match("/^[a-z ]{1,144}$/", $text)) {
            return false;
        }

        if (!preg_match("/[^\W_]{1,255}$/", $bigText)) {
            return false;
        }

        return true;
    }

    function renderer($params = false)
    {
        if ($params) {
            $inputs = $params;
        }
        foreach ($inputs as $input) {
            if ($input['type'] == "text") {
                echo "<div class='form-group row'>";
                echo "<label class='col-md-2' for=" . $input['name'] . ">" . $input['label'] . ": </label>";
                echo "<div class='col-md-10'>";
                echo "<input class='form-control' type='text' id=" . $input['id'] . " " . "name=" . $input['name'] . " " . " placeholder=" . $input['placeholder'] . " >";
                echo "</div>";
                echo "</div>";
            }
            if ($input['type'] == "textarea") {
                echo "<div class='form-group row'>";
                echo "<label class='col-md-2' for=" . $input['name'] . ">" . $input['label'] . ": </label>";
                echo "<div class='col-md-10'>";
                echo "<textarea class='form-control' id=" . $input['id'] . " " . "name=" . $input['name'] . "></textarea>";
                echo "</div>";
                echo "</div>";
            }
            if ($input['type'] == "checkbox") {
                echo "<div class='form-group row'>";
                echo "<div class='col-md-2'>Checkbox</div>";
                echo "<div class='col-md-10'>";
                echo "<div class='form-check'>";
                echo "<input class='form-check-input' type='checkbox' id=" . $input['id'] . " " . "name=" . $input['name'] . ">";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        };
    }
}
