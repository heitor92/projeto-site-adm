<?php

if (resolve('/admin')) {
    render('admin/home', 'admin');
} elseif (resolve('/admin/pages.*')) {
    include __DIR__ . '/pages/routes.php';
} elseif (resolve('/admin/users.*')) {
    include __DIR__ . '/users/routes.php';
} elseif (resolve('/admin/upload/image')) {
    echo 'deu certo';
} else {
    http_response_code(404);
    echo 'Página não encontrada.';
}
