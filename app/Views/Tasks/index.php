<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Tareas<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Tareas</h1>
    
    <a href="<?= site_url("/tasks/new") ?>">Nueva Tarea</a>

    <?php if ($tasks): ?>
    
        <ul>
            <?php foreach($tasks as $task): ?>
            
                <li>
                    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                        <?= esc($task->description) ?>
                    </a>
                </li>
                
            <?php endforeach; ?>
        </ul> 

    <?= $pager->simplelinks() ?>

    <?php else: ?>

        <p>No existen tareas.</p>
    
    <?php endif; ?> 

    <script src="<?= site_url('/js/auto-complete.min.js') ?>"></script>

<?= $this->endSection() ?>