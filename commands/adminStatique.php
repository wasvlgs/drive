

<?php






    class getAdminStatique{


        private $database;
        private $idClient;

        public function __construct($db,$getID)
        {
            $this->database = $db;
            $this->idClient = $getID;
        }


        public function getAllVehicule(){
            $getAllVehicule = $this->database->prepare("SELECT COUNT(*) AS totale FROM vehicule");
            if($getAllVehicule->execute()){
                $getRow = $getAllVehicule->fetch(PDO::FETCH_ASSOC);
                return $getRow['totale'];
            }else{
                return 0;
            }
        }

        public function getActiveResere(){
            $getActiveReserve = $this->database->prepare("SELECT COUNT(*) AS totale FROM reservation WHERE statut = 'Canfirmed'");
            if($getActiveReserve->execute()){
                $getRow = $getActiveReserve->fetch(PDO::FETCH_ASSOC);
                return $getRow['totale'];
            }else{
                return 0;
            }
        }

        public function getAllReviews(){
            $getReviews = $this->database->prepare("SELECT COUNT(*) AS totale FROM avis");
            if($getReviews->execute()){
                $getRow = $getReviews->fetch(PDO::FETCH_ASSOC);
                return $getRow['totale'];
            }else{
                return 0;
            }
        }

        public function getAllCategories(){
            $getCategories = $this->database->prepare("SELECT COUNT(*) AS totale FROM categorie");
            if($getCategories->execute()){
                $getRow = $getCategories->fetch(PDO::FETCH_ASSOC);
                return $getRow['totale'];
            }else{
                return 0;
            }
        }

    }