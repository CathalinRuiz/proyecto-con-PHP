<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Editar Tarea<?= $this->endSection() ?>
   
<?= $this->section('content') ?>

<h1>Editar Tarea</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/tasks/update/" . $task->id) ?>

    <?= $this->include('Tasks/form') ?>
    
    <button>Guardar</button>
    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">Cancelar</a>

</form>

<?= $this->endSection() ?>