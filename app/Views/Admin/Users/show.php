<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Usuario<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Usuario</h1>
    
<a href="<?= site_url("/admin/users") ?>">&laquo; Volver a Indice</a>

<dl>
    <dt>Nombre</dt>
    <dd><?= esc($user->nombre) ?></dd>

    <dt>email</dt>
    <dd><?= esc($user->email) ?></dd>

    <dt>Activo</dt>
    <dd><?= $user->is_activo ? 'si' : 'no' ?></dd>

    <dt>Administrador</dt>
    <dd><?= $user->is_admin ? 'si' : 'no' ?></dd>
    
    <dt>Creado en</dt>
    <dd><?= $user->creado_en?></dd>
    
    <dt>Actualizada en</dt>
    <dd><?= $user->actualizado_en ?></dd>
</dl>

<a href="<?= site_url('/admin/users/edit/' . $user->id) ?>">Editar</a>

<?php if ($user->id != current_user()->id): ?>

    <a href="<?= site_url('/admin/users/delete/' . $user->id) ?>">Eliminar</a>

<?php endif; ?>

<?= $this->endSection() ?>