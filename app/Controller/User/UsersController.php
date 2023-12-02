<?php
    namespace App\Controller\User;

    class UsersController extends AppController{

        public function __construct(){
            parent::__construct();
            $this->loadModel('Food');
            $this->loadModel('Category');
        }

        public function index(){
            switch($_GET['category_id']){
                case 1:
                    $items = $this->Food->findWithCategory(1);
                    $this->render('users.entree', compact('items'));
                break;
                case 2:
                    $items = $this->Food->findWithCategory(2);
                    $this->render('users.menu', compact('items'));  
                break;
                case 3:
                    $items = $this->Food->findWithCategory(3);
                    $this->render('users.dessert', compact('items'));
                break;
                case 4:
                    $items = $this->Food->findWithCategory(4);
                    $this->render('users.appero', compact('items'));
                break;
                case 5:
                    $items = $this->Food->findWithCategory(5);
                    $this->render('users.boisson', compact('items'));
                break;
                default:
                    $items = $this->Food->all();
                    $this->render('users.index', compact('items'));
                break;
            }
        }
        public function buy(){
            $this->render('users.buy');
        }
    }