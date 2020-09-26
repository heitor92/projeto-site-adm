<h3 class="mb-5">Administração de páginas</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>título</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['pages'] as $page) : ?>
            <tr>
                <td><?= $page['id']; ?></td>
                <td><a href="/admin/pages/<?= $page['id']; ?>"><?= $page['title']; ?></a></td>
                <td class="text-right">
                    <a href="/admin/pages/<?= $page['id']; ?>" class="btn btn-primary btn-sm">ver</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<a href="/admin/pages/create" class="btn btn-secondary">Novo</a>