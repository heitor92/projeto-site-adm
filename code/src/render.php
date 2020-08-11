<?php

function render($content, $template, array $data = []){
    $content =  __DIR__ . '/../template/' .  $content . '.tpl.php';
    return include __DIR__ . '/../template/' . $template . '.tpl.php';
}