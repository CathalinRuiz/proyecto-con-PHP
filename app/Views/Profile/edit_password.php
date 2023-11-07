<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar Contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Editar Contraseña</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/profile/updatepassword") ?>

    <div>
        <label for="Current_password">Actual Contraseña</label>
        <input type="password" name="current_password">
    </div>

    <div>
        <label for="password">Nueva Contraseña</label>  
        <input type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input type="password" name="password_confirmation">
    </div>

    <button>Guardar</button>
    <a href="<?= site_url("/profile/show") ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>