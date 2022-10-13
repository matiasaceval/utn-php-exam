<?php namespace Model;

    class User {
        private $userId;
        private $email;
        private $password;

        public function GetUserId(){
            return $this->userId;
        }

        public function SetUserId($userId){
            $this->userId = $userId;
        }

        public function GetEmail(){
            return $this->email;
        }

        public function SetEmail($email){
            $this->email = $email;
        }

        public function GetPassword(){
            return $this->password;
        }

        public function SetPassword($password){
            $this->password = $password;
        }
    }
?>