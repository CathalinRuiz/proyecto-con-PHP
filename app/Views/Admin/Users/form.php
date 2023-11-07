<div>
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
</div>
    
<div>
    <label for="email">email</label>
    <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
</div>
    
    <div>
        <label for="password">contraseña</label>
        <input type="password" name="password">
        <?php if ($user->id): ?>
            <p>Dejar vacio para guardar contraseña existente</p>
        <?php endif; ?>

    </div>
    
    <div>    
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <label for="is_active">

            <?php if ($user->id == current_user()->id): ?>
                <input type="checkbox" checked disabled> Administrator

            <?php else: ?>    

                <input type="hidden" name="is_active" value="0">   

                <input type="checkbox" id="is_active" name="is_active" value="1"
                    <?php if (old('is_active', $user->is_active)): ?>checked<?php endif; ?>> Administrator

            <?php endif; ?>
        </label>
    </div>   

    <div>
        <label for="is_active">

            <?php if ($user->id == current_user()->id): ?>
                <input type="checkbox" checked disabled> active

            <?php else: ?>    

                <input type="hidden" name="is_active" value="0">   

                <input type="checkbox" id="is_active" name="is_active" value="1"
                    <?php if (old('is_active', $user->is_active)): ?>checked<?php endif; ?>> active

            <?php endif; ?>
        </label>
    </div>   