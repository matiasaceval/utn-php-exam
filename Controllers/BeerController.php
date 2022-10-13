<?php namespace Controllers;

    use Model\Beer as Beer;
    use DAO\BeerDAO as BeerDAO;

    class BeerController {
        private $beerDAO;

        public function __construct() {
            $this->beerDAO = new BeerDAO();
        }

        public function Add($beerTypeId, $name, $ibu, $price){
            if($_POST){
                $beer = new Beer();
                $beer->SetBeerId($this->beerDAO->GetLastId() + 1);
                $beer->SetBeerTypeId(intval($beerTypeId));
                $beer->SetName($name);
                $beer->SetIbu(intval($ibu));
                $beer->SetPrice(floatval($price));
                $this->beerDAO->Add($beer);

                $_SESSION['added'] = "Se agregó la cerveza " . $beer->GetName() . " correctamente.";
                header("location: ".FRONT_ROOT."Home/Add");
            }
        }
    }

?>