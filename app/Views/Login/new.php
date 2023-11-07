<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Iniciar Sesion<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Iniciar Sesion</h1>

<?= form_open("/login/create") ?>   

    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="remember_me">
            <input type="checkbox" id="remember_me" name="remember_me"
                <?php if (old('remember_me')): ?>checked<?php endif; ?>> Recordarme
        </label>
    </div>

    <button>Acceso</button>

    <a href="<?= site_url("/password/forgot") ?>">Olvido su contraseña?</a>

</form>

<?= $this->endSection() ?>