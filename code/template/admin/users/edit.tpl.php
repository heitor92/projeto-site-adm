<h3 class="mb-5">Administração de usuários</h3>

<form action="" method="post">
    <div class="form-group">
        <label for="userEmail">Email</label>
        <input id="userEmail" type="email" name="email" class="form-control" placeholder="Seu email aqui..." value="<?= $data['user']['email']; ?>">
    </div>
    <div class="form-group">
        <label for="userPassword">Senha</label>
        <input id="userPassword" type="password" name="password" class="form-control" placeholder="Sua senha..." value="">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<a href="/admin/users/<?= $data['user']['id']; ?>" class="btn btn-secondary">Voltar</a>