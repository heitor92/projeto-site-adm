<?php

$pages_all = function () {
    // buscar todas as páginas
};

$pages_one = function ($id) {
    // buscar uma única página
};

$pages_create = function () {
    // cadastra uma página
    flash('Criou registro com sucesso', 'success');
};

$pages_edit = function ($id) {
    // atualiza uma página
    flash('Atualizou registro com sucesso', 'success');
};

$pages_delete = function ($id) {
    // remove uma página
    flash('Removeu registro com sucesso', 'success');
};
