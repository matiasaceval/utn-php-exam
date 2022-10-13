<?php
    namespace Controllers;

    use Utils\Session as Session;
    use DAO\BeerDAO as BeerDAO;
    use DAO\BeerTypeDAO as BeerTypeDAO;

    class HomeController
    {
        private $beerDAO;
        private $beerTypeDAO;

        public function __construct()
        {
            $this->beerDAO = new BeerDAO();
            $this->beerTypeDAO = new BeerTypeDAO();
        }

        public function Index($message = "")
        {
            if(Session::IsLogged()){
                header("location: ".FRONT_ROOT."Home/Add");
            }
            require_once(VIEWS_PATH."index.php");
        } 
        
        public function Add($message = "")
        {
            Session::VerifySession();

            $beerTypeList = $this->beerTypeDAO->GetAll();
            require_once(VIEWS_PATH."beer-add.php");
        } 

        public function Logout()
        {
            require_once(VIEWS_PATH."logout.php");
        } 
        
        public function List($message = "")
        {
            Session::VerifySession();

            $beerList = $this->beerDAO->GetAll();
            $beerTypesList = array();
            foreach($this->beerTypeDAO->GetAll() as $beerType){
                $beerTypesList[$beerType->GetBeerTypeId()] = $beerType->GetDescription();
            }
            require_once(VIEWS_PATH."beer-list.php");
        }  
    }
