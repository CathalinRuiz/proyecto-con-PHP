<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar Perfil<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Editar Perfil</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/profile/update") ?>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
    </div>    
    
    <button>Save</button>
    <a href="<?= site_url("/profile/show") ?>">Cancel</a>

</form>

<?= $this->endSection() ?>