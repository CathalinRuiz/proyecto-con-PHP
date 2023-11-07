<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar Imagen de Perfil<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Eliminar Imagen de Perfil</h1>

<p>Confirmar la eliminacion de la Imagen de Perfil</p>

<?= form_open("/profileimage/delete") ?>

    <button>SI</button>
    <a href="<?= site_url("/profile/show") ?>">Cancelar</a>
    
</form>

<?= $this->endSection() ?>