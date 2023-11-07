<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Perfil<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Perfil</h1>

<?php if ($user->profile_image): ?>

    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="profile image">

    <a href="<?= site_url('/profileimage/delete') ?>">Eliminar Imagen de Perfil</a>

<?php else: ?>

    <img src="<?= site_url('/images/imagen_perfil.png') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>


<dl>
    <dt>Nombre</dt>
    <dd><?= esc($user->name) ?></dd>
    
    <dt>email</dt>
    <dd><?= esc($user->email) ?></dd>
</dl>

<a href="<?= site_url("/profile/edit") ?>">Editar</a>

<a href="<?= site_url("/profile/editpassword") ?>">Cambiar Contraseña</a>

<a href="<?= site_url("/profileimage/edit") ?>">Cambiar Imagen de Perfil</a

<?= $this->endSection() ?>