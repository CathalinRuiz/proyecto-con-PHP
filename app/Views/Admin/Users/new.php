<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Nuevo usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Nuevo usuario</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/admin/users/create") ?>

    <?= $this->include('Admin/Users/form') ?>
    
    <button>guardar</button>
    <a href="<?= site_url("/admin/users") ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>