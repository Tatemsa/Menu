<?php

namespace App\Controller\User;

use \App;
use \Core\Auth\DBAuth;
class AppController extends \App\Controller\AppController{

    public function __construct(){
        parent:: __construct();
        $app = App::getInstanceDb();
        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()){
            $this->forbidden();
        }
    }
}