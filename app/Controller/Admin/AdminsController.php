<?php
    namespace App\Controller\Admin;

    class AdminsController extends AppController{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->render('admins.index');
        }
    }