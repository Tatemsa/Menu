<?php
    namespace Core\Auth;

    use Core\Database\MysqlDatabase;
    class  DBAuth{
        private $db;

        public function __construct(MysqlDatabase $db){
            $this->db = $db;
        }

        public function login($username, $password, $table_name = 'admins'){
            $user = $this->db->prepare('SELECT * FROM '.  $table_name .' WHERE email = ?', [$username], null, true);
            if($user){
                if($user->password === sha1($password)){
                    $_SESSION['auth'] = $user->id;
                    return true;
                }
            }
            return false;
        }

        public function getUserId(){
            if($this->logged()){
                return $_SESSION['auth'];
            } 
            return false;
        }

        public function logged(){
            return isset($_SESSION['auth']);
        }
    }