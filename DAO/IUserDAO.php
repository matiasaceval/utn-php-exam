<?php
    namespace DAO;

    use Model\User as User;

    interface IUserDAO
    {
        public function GetAll();
        public function GetByCredentials($email, $password);
    }
?>