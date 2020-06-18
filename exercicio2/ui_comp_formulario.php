<?php

class UI_Comp_Formulario
{

    public $validateScript;

    function __construct($validateScript = false)
    {
        $this->validateScript = $validateScript;
    }

    function validate($post)
    {
        if ($post['date'] == "" || $post['text'] == "") {
            return false;
        }

        $date = $post['date'];
        $text = $post['text'];

        if (!preg_match('/^(\d{2})-(\d{2})-(\d{4})$/', $date)) {
            return false;
        }

        if (!preg_match("/^[a-z ]{1,144}$/", $text)) {
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
            echo "<label for=" . $input['name'] . ">" . $input['label'] . ": </label>";
            if ($input['type'] == "text") {
                echo "<input type='text' id=" . $input['id'] . " " . "name=" . $input['name'] . " " . " placeholder=" . $input['placeholder'] . " >";
            }
            if ($input['type'] == "textarea") {
                echo "<textarea id=" . $input['id'] . " " . "name=" . $input['name'] . "></textarea>";
            }
            if ($input['type'] == "checkbox") {
                echo "<input type='checkbox' id='scales' name='scales' checked>";
            }
        };
    }
}
