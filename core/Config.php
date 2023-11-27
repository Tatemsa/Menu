<?php
    namespace Core;

    class Config {
        private $settings = [];
        private static $_instance = [];

        public function __construct($fille){
            $this->settings = require($fille);
        }

        public static function getInstance($fille){
            if(self::$_instance === []){
                self::$_instance = new Config($fille);
            }
            return self::$_instance;
        }

        public function get($key){
            if(!isset($this->settings[$key])){
                return null;
            }
            return $this->settings[$key];
        }
    }