<?php
    namespace DAO;

    use DAO\IBeerTypeDAO as IBeerTypeDAO;
    use Model\BeerType as BeerType;

    class BeerTypeDAO implements IBeerTypeDAO {
        private $beerTypeList = array();
        private $filePath = ROOT . "Data/beerTypes.json";

        public function GetAll(){
            $this->RetrieveData();
            return $this->beerTypeList;
        }

        private function SaveData(){
            $arrayToEncode = array();
            foreach($this->beerTypeList as $variable){
                $valuesArray["beerTypeId"] = $variable->GetBeerTypeId();
                $valuesArray["description"] = $variable->GetDescription();
                array_push($arrayToEncode, $valuesArray);
            }

            file_put_contents($this->filePath, json_encode($arrayToEncode, JSON_PRETTY_PRINT));
        }

        private function RetrieveData()
        {
            $this->beerTypeList = array();
            
            if(file_exists($this->filePath))
            {
               $jsonToDecode = file_get_contents($this->filePath);
               
               $jsonDecoded = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();
               
               foreach($jsonDecoded as $obj)
               {
                    $beer = new BeerType();
                    $beer->SetBeerTypeId($obj["beerTypeId"]);
                    $beer->SetDescription($obj["description"]);
                    array_push($this->beerTypeList, $beer);
               }
            }
        }
    }
?>