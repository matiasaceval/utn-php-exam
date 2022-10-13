<?php
    namespace Controllers;

    use Utils\Session;
    use DAO\UserDAO as UserDAO;

    class AuthController
    {
        private $userDAO;

        public function __construct()
        {
            $this->userDAO = new UserDAO();
        }
        
        public function Login($email, $password)
        {
            if($_POST){
                $user = $this->userDAO->GetByCredentials($email, $password);
                if($user != null){
                    Session::CreateSession($user);
                    header("location: ".FRONT_ROOT. "Home/Add");
                    return;
                } else {
                    $_SESSION['error'] = "Usuario o contraseña incorrectos.";
                }
            }
            header("location: " . FRONT_ROOT . "Home/Index");
        }   
    }
?>
