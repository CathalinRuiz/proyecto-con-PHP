<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar Perfil<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Editar Perfil</h1>

<p>Ingrese su contraseña para continuar</p>

<?= form_open("/profile/processauthenticate") ?>

    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
    </div>
    
    <button>Guardar</button>
    <a href="<?= site_url('/profile/show') ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>