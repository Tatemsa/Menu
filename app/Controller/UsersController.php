<?php

namespace App\Controller;

use \Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController{

    protected $user = "user";
    protected $users = "users";

    public function login(){
        $errors = false;
        if(!empty($_POST)){
            $auth = new \Core\Auth\DBAuth(App::getInstanceDb()->getDb());
            if($auth->login($_POST['email'], $_POST['password'], $this->users)){
                header('Location: index.php?p='. $this->user .'.'. $this->users .'.index&category_id');
            } else {
               $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render($this->users.'.login', compact('form', 'errors'));
    }

}