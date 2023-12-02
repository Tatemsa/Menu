<?php
    namespace App\Controller\Admin;

    use Core\HTML\BootstrapForm;
    class AdminsController extends AppController{

        public function __construct(){
            parent::__construct();
            $this->loadModel('Admin');
            $this->loadModel('Food');
            $this->loadModel('Category');
        }

        public function index(){
            $items = $this->Food->all();
            $admin_id = $_SESSION['auth'];
            $this->render('admins.index', compact('items'));
        }

        public function add(){
            if(!empty($_POST)){
                $result= $this->Food->create(['description'=>$_POST['description'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'category_id'=>$_POST['category_id'], 'admin_id'=>$_POST['admin_id']]);
                if(!$result){
                    return $this->index();
                }
            }
            $categories = $this->Category->extractRecord('id', 'title');
            $form = new BootstrapForm($_POST);
            $this->render('admins.add', compact('categories', 'form'));
        }

        public function edith(){
            $success = false;
            if(!empty($_POST)){
                $result=$this->Food->update($_GET['id'], ['description'=>$_POST['description'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'category_id'=>$_POST['category_id'], 'admin_id'=>$_SESSION['auth']]);
                if(!$result){
                   return $this->index();
                }
            }
            
            $food = $this->Food->find($_GET['id']);
            $categories =$this->Category->extractRecord('id', 'title');
            $form = new BootstrapForm($food);
            $this->render('admins.edith', compact('categories', 'form'));
        }

        public function delete(){
            if(!empty($_POST)){
                $result=$this->Food->delete($_POST['id']);
                if($result){
                    return $this->index();
                }
            }
        }

        public function dashboard(){
            $this->render('admins.dashboard');
        }
    }