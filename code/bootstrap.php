<?php

function resolve($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/';

    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    if(preg_match($route, $path, $params)){
       return $params;
    }

    return false;

}

function render($content, $template, array $data = []){
    $content =  __DIR__ . '/template/' .  $content . '.tpl.php';
    return include __DIR__ . '/template/' . $template . '.tpl.php';
}

if(resolve('/admin/?(.*)')){
    require __DIR__ . '/admin/routes.php';
} elseif (resolve('/(.*)')){
    require __DIR__ . '/site/routes.php';
}