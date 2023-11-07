<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Reinicio de contraseña<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Reinicio de contraseña</h1>

<?php if (session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open("/password/processreset/$token") ?>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    
    <div>
        <label for="password_confirmation">Repeat password</label>
        <input type="password" name="password_confirmation">
    </div>
    
    <button>Resetear contraseña</button>

</form>

<?= $this->endSection() ?>