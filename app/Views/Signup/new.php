<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Crear<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Crear</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/signup/create") ?>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="<?= old('name') ?>">
    </div>
    
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
    </div>
    
    <div>
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input type="password" name="password_confirmation">
    </div> 
    
    <button>Guardar</button>
    <a href="<?= site_url("/") ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>