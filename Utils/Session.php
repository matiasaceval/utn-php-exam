<?php namespace Utils;

    use Model\User as User;

    class Session {
        public static function CreateSession(User $user) {
            $_SESSION["loggedUser"] = $user;
        }

        public static function VerifySession() {
            if(!isset($_SESSION["loggedUser"])) {
                header("location: ".FRONT_ROOT."Home/Index");
            }
        }

        public static function IsLogged() {
            return isset($_SESSION["loggedUser"]);
        }

        public static function DeleteSession() {
            session_start();
            session_destroy();
        }
    }
?>