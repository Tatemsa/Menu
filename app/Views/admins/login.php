<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifier not correct
    </div>
<?php endif; ?>
<form method = "post">
    <?= $form->input('email', 'pseudo')?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password'])?>
    <?= $form->submit()?>
</form>