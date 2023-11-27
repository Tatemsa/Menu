<?php
    namespace App\Entity;

    use Core\Entity\Entity;

    class UserEntity extends Entity{
        /**
         * Cette fonction permet d'obtenir des URLs pour chaque entité qui représente chaque Table.
         */
        public function getUrl(){
            return 'index.php?p=posts.show&id=';
        }
    }