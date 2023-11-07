<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Usuarios<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Usuarios</h1>
    
    <a href="<?= site_url("/admin/users/new") ?>">Nuevo Usuario</a>

    <?php if ($users): ?>
    
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>email</th>
                    <th>Activo</th>
                    <th>Administrador</th>
                    <th>creado en</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach($users as $user): ?>
                
                    <tr>
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_active ? 'si' : 'no' ?></td>
                        <td><?= $user->is_admin ? 'si' : 'no' ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table> 

    <?= $pager->simplelinks() ?>

    <?php else: ?>

        <p>No existe usuario.</p>
    
    <?php endif; ?> 

<?= $this->endSection() ?>