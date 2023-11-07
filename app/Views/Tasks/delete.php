<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Eliminar Tarea<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Eliminar Tarea</h1>

<p>Confirmar la eliminacion de la Tarea</p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <button>SI</button>
    <a href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancelar</a>
    
</form>

<?= $this->endSection() ?>