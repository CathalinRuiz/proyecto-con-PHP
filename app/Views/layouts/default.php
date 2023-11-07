<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection("title") ?></title>
    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css') ?>">
</head>
<body>

<a href="<?= site_url("/") ?>">Inicio</a>
    
    <?php if (current_user()): ?>
        
       <p>Hola Bienvenido <?= esc(current_user()->name) ?></p>

       <a href="<?= site_url('/profile/show') ?>">Perfil</a>

       <?php if (current_user()->is_admin): ?>

            <a href="<?= site_url("/admin/users") ?>">Usuarios</a>

        <?php endif; ?>

       <a href="<?= site_url("/tasks") ?>">Tareas</a>
        
        <a href="<?= site_url("/logout") ?>">Cerrar Sesion</a>
        
    <?php else: ?>
        
       <a href="<?= site_url("/signup") ?>">Crear Usuario</a>
        
        <a href="<?= site_url("/login") ?>">Iniciar Sesion</a>
        
    <?php endif; ?>



    <?php if (session()->has('warning')): ?>
        <div class="warning">
            <?= session('warning') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('info')): ?>
        <div class="info">
            <?= session('info') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="error">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection("content") ?>
     
</body>
</html>