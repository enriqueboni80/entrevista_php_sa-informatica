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
        if ($post['data'] || $post['texto']) {
            echo "true";
        } else {
            echo "false";
        }
    }

    function renderer($params = [])
    {
        foreach ($params as $param) {
            echo "<label for=" . $param['name'] . ">" . $param['label'] . ": </label>";
            echo "<input type='text' 
            id=" . $param['id'] . " 
            name=" . $param['name'] . " 
            placeholder=" . $param['placeholder'] . " >";
        };
    }
}
