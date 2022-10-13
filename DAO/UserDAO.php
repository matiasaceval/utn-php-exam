<?php
    namespace DAO;

    use DAO\IUserDAO as IUserDAO;
    use Model\User as User;

    class UserDAO implements IUserDAO {
        private $userList = array();
        private $filePath = ROOT . "Data/users.json";

        public function GetAll(){
            $this->RetrieveData();
            return $this->userList;
        }

        public function GetByCredentials($email, $password)
        {
            $this->RetrieveData();
            foreach($this->userList as $user) {
                if($user->GetEmail() === $email && $user->GetPassword() === $password) {
                    return $user;
                }
            }
            return null;
        }

        private function SaveData(){

            $arrayToEncode = array();

            foreach($this->userList as $variable){
                $valuesArray["userId"] = $variable->GetUserId();
                $valuesArray["email"] = $variable->GetEmail();
                $valuesArray["password"] = $variable->GetPassword();
                array_push($arrayToEncode, $valuesArray);
            }

            file_put_contents($this->filePath, json_encode($arrayToEncode, JSON_PRETTY_PRINT));
        }

        private function RetrieveData()
        {
            $this->userList = array();
            
            if(file_exists($this->filePath))
            {
               $jsonToDecode = file_get_contents($this->filePath);
               
               $jsonDecoded = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();
               
               foreach($jsonDecoded as $obj)
               {
                    $user = new User();
                    $user->SetUserId($obj["userId"]);
                    $user->SetEmail($obj["email"]);
                    $user->SetPassword($obj["password"]);
                    array_push($this->userList, $user);
               }
            }
        }
    }
?>