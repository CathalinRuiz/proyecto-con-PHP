<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar Usuario<?= $this->endSection() ?>
   
<?= $this->section('content') ?>

<h1>Editar Usuario</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/admin/users/update/" . $user->id) ?>

    <?= $this->include('Admin/Users/form') ?>
    
    <button>Guardar</button>
    <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>