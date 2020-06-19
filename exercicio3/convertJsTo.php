<?php

$file = './js/index.js';
$typeConvert = $_GET["typeConvert"];

/*Selecione o que vai querer converter*/
$arrayConversao = array(
    array("jquery" => "$('.testando')", "vanillaJs" => "document.querySelector('.testando')"),
    array("jquery" => "$('#testando')", "vanillaJs" => "document.getElementById('testando')"),
    array("jquery" => ".hide()", "vanillaJs" => ".style.display = 'none'"),
    array("jquery" => ".show()", "vanillaJs" => ".style.display = 'block'"),
    array("jquery" => ".html('')", "vanillaJs" => ".innerHTML = ''"),
    array("jquery" => ".html(newText)", "vanillaJs" => ".innerHTML = newText")
);

foreach ($arrayConversao as $key => $item) {
    if ($typeConvert == "vanilla") {
        file_put_contents($file, str_replace($item["jquery"], $item["vanillaJs"], file_get_contents($file), $wasConverted));
    } else {
        file_put_contents($file, str_replace($item["vanillaJs"], $item["jquery"], file_get_contents($file), $wasConverted));
    }
}
echo $wasConverted;
