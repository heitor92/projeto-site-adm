<?php

include __DIR__ . '/db.php';

if (resolve('/admin/users')) {
    $users = $users_all();
    render('admin/users/index', 'admin', compact('users'));
} else if (resolve('/admin/users/create')) {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $users_create();
        return header('location: /admin/users');
    }
    render('admin/users/create', 'admin');
} else if (resolve('/admin/users/(\d+)')) {
    render('admin/users/view', 'admin');
} else if (resolve('/admin/users/(\d+)/edit')) {
    render('admin/users/edit', 'admin');
} else if ($params = resolve('/admin/users/(\d+)/delete')) {
    $users_delete($params[1]);
    return header('location: /admin/users');
}
