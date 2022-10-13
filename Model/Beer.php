<?php namespace Model;

    class Beer {
        private $beerId;
        private $beerTypeId;
        private $name;
        private $ibu;
        private $price;

        public function GetBeerId(){
            return $this->beerId;
        }

        public function SetBeerId($beerId){
            $this->beerId = $beerId;
        }

        public function GetBeerTypeId(){
            return $this->beerTypeId;
        }

        public function SetBeerTypeId($beerTypeId){
            $this->beerTypeId = $beerTypeId;
        }

        public function GetName(){
            return $this->name;
        }

        public function SetName($name){
            $this->name = $name;
        }

        public function GetIbu(){
            return $this->ibu;
        }

        public function SetIbu($ibu){
            $this->ibu = $ibu;
        }

        public function GetPrice(){
            return $this->price;
        }

        public function SetPrice($price){
            $this->price = $price;
        }
    }
    
?>