<?php 

if (resolve('/admin/auth/login')) {
    render('admin/auth/login', 'admin/login');
}