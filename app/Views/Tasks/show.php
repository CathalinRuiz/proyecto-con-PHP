<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Tareas<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Tareas</h1>

<a href="<?= site_url("/tasks") ?>">&laquo; Regresar al indice</a>

<dl>
    <dt>ID</dt>
    <dd><?= $task->id ?></dd>
    
    <dt>Descripcion</dt>
    <dd><?= esc($task->description) ?></dd>
    
    <dt>Creado en</dt>
    <dd><?= $task->created_at ?></dd>
    
    <dt>Actualizado en</dt>
    <dd><?= $task->updated_at ?></dd>
</dl>

<a href="<?= site_url('/tasks/edit/' . $task->id) ?>">Editar</a>
<a href="<?= site_url('/tasks/delete/' . $task->id) ?>">Eliminar</a>

<?= $this->endSection() ?>