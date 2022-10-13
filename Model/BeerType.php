<?php namespace Model;

    class BeerType {
        private $beerTypeId;
        private $description;

        public function GetBeerTypeId(){
            return $this->beerTypeId;
        }

        public function SetBeerTypeId($beerTypeId){
            $this->beerTypeId = $beerTypeId;
        }

        public function GetDescription(){
            return $this->description;
        }

        public function SetDescription($description){
            $this->description = $description;
        }
    }
?>