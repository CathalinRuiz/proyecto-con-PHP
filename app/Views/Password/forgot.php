<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Olvido su contraseña?<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Olvido su contraseña?</h1>

<?= form_open("/password/processforgot") ?>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <button>Enviar</button>

</form>

<?= $this->endSection() ?>