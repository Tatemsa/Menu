<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifier not correct
    </div>
<?php endif; ?>

<div class="container">
    <div class="centraliser">
        <div class="error-pagewrap">
            <div class="error-page-int">
                <div class="text-center m-b-md custom-login">
                    <h3>Menu du caviar</h3>
                </div>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form id="loginForm" method="post">
                                <div class="form-group">
                                    <?= $form->input('email', 'Email')?>
                                </div>
                                <div class="form-group">
                                    <?= $form->input('password', 'Mot de passe', ['type' => 'password'])?>
                                </div>
                                <p></p>
                                <?= $form->submit()?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center login-footer">
                    <p>Copyright © 2023. All rights reserved.</p>
                </div>
            </div>   
        </div>
    </div>
</div>