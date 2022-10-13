<?php
    namespace DAO;

    use Model\Beer as Beer;

    interface IBeerDAO
    {
        public function Add(Beer $beer);
        public function GetAll();
        public function GetLastId();
    }
?>