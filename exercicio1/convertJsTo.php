<?php

$file = 'index.js';
$typeConvert = $_GET["typeConvert"];

/*Selecione o que vai querer converter*/
$arrayConversao = array(
    array("jquery" => "$('.testando').hide()", "vanillaJs" => "document.querySelector('.testando').style.display = 'none'"),
    array("jquery" => "$('.testando').show()", "vanillaJs" => "document.querySelector('.testando').style.display = 'block'"),
    array("jquery" => "$('.testando').html('')", "vanillaJs" => "document.querySelector('.testando').innerHTML = ''"),
    array("jquery" => "$('.testando').html(newText)", "vanillaJs" => "document.querySelector('.testando').innerHTML = newText")
);

foreach ($arrayConversao as $key => $item) {
    if ($typeConvert == "vanilla") {
        file_put_contents($file, str_replace($item["jquery"], $item["vanillaJs"], file_get_contents($file), $wasConverted));
    } else {
        file_put_contents($file, str_replace($item["vanillaJs"], $item["jquery"], file_get_contents($file), $wasConverted));
    }
}
echo $wasConverted;
