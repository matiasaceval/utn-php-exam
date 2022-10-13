<?php
    namespace DAO;

    use DAO\IBeerDAO as IBeerDAO;
    use Model\Beer as Beer;

    class BeerDAO implements IBeerDAO {
        private $beerList = array();
        private $filePath = ROOT . "Data/beers.json";

        public function Add(Beer $beer){
            $this->RetrieveData();
            array_push($this->beerList, $beer);
            $this->SaveData();
        }

        public function GetAll(){
            $this->RetrieveData();
            return $this->beerList;
        }

        public function GetLastId()
        {
            $this->RetrieveData();
            $last = end($this->beerList);
            return $last ? $last->GetBeerId() : 0;
        }

        private function SaveData(){
            $arrayToEncode = array();
            foreach($this->beerList as $variable){
                $valuesArray["beerId"] = $variable->GetBeerId();
                $valuesArray["beerTypeId"] = $variable->GetBeerTypeId();
                $valuesArray["name"] = $variable->GetName();
                $valuesArray["ibu"] = $variable->GetIbu();
                $valuesArray["price"] = $variable->GetPrice();
                array_push($arrayToEncode, $valuesArray);
            }

            file_put_contents($this->filePath, json_encode($arrayToEncode, JSON_PRETTY_PRINT));
        }

        private function RetrieveData()
        {
            $this->beerList = array();
            
            if(file_exists($this->filePath))
            {
               $jsonToDecode = file_get_contents($this->filePath);
               
               $jsonDecoded = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();
               
               foreach($jsonDecoded as $obj)
               {
                    $beer = new Beer();
                    $beer->SetBeerId($obj["beerId"]);
                    $beer->SetBeerTypeId($obj["beerTypeId"]);
                    $beer->SetName($obj["name"]);
                    $beer->SetIbu($obj["ibu"]);
                    $beer->SetPrice($obj["price"]);
                    array_push($this->beerList, $beer);
               }
            }
        }
    }
?>