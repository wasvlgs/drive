




<?php






    class reserve{

        private $lieu;
        private $start;
        private $end;
        private $idVecule;
        private $idClient;
        private $database;

        public function __construct($lieu,$start,$end,$idClient,$idVecule,$db)
        {
            $this->lieu = $lieu;
            $this->start = $start;
            $this->end = $end;
            $this->end = $idClient;
            $this->end = $idVecule;
            $this->database = $db;
        }

        public function reserve(){
            if($this->lieu && $this->start && $this->end){
                $sql = "INSERT INTO reservation(date_start,date_end,lieu_charge,id_client,id_vehicule) VALUES(:dateS,:dateE,:lieu,:idClient,:id_Vehicule)";
                $addReserve = $this->database->prepare($sql);
                $addReserve->bindParam(":dateS",$this->start);
                $addReserve->bindParam(":dateE",$this->end);
                $addReserve->bindParam(":lieu",$this->lieu);
                $addReserve->bindParam(":idClient",$this->idVecule);
                $addReserve->bindParam(":id_Vehicule",$this->idClient);
                if($addReserve->execute()){
                    echo '<script>location.replace("../pages/reservation.php")</script>';
                }else{
                    echo '<script>alert("Error try again later")</script>';
                }
            }else{
                echo '<script>alert("Incorrect information")</script>';
            }
            
        }
    }