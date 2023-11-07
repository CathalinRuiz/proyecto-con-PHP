<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar Usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Eliminar Usuario</h1>

<p>Confirmar Eliminacion de usuario</p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <button>Si</button>
    <a href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancelar</a>
    
</form>

<?= $this->endSection() ?>