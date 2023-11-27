<?php
    namespace App\Controller\User;

    class UsersController extends AppController{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->render('users.dashboard');
        }
    }