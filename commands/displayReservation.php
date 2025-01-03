


<?php




    class displayReservation{
        
        private $database;
        private $idClient;

        public function __construct($db,$idClient)
        {
            $this->database = $db;
            $this->idClient = $idClient;
        }


        public function displayReservationClient(){

            $sql = "SELECT * FROM reservation INNER JOIN vehicule ON reservation.id_vehicule = vehicule.id_vehicule WHERE reservation.id_client = :idClient ORDER BY id_reservation DESC";
            $getReservation = $this->database->prepare($sql);
            $getReservation->bindParam(":idClient",$this->idClient);
            if($getReservation->execute()){
                foreach($getReservation as $reservation){
                    $getButtons = '';
                    $getColor = 'red';
                    if($reservation['statut'] === "Canfirmed"){
                        $getColor = 'green';
                        $getButtons = '<button onclick="openModifyPopup(`'.$reservation['lieu_charge'].'`, `'.$reservation['date_start'].'`, `'.$reservation['date_end'].'`,'.$reservation['id_reservation'].')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Modify</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Cancel</button>
                                <button onclick="openReviewPopup(`'.$reservation['name'].'`)" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Set Review</button>';
                    }else if($reservation['statut'] === "Pending"){
                        $getColor = 'yellow';
                        $getButtons = '<button onclick="openModifyPopup(`'.$reservation['lieu_charge'].'`, `'.$reservation['date_start'].'`, `'.$reservation['date_end'].'`,'.$reservation['id_reservation'].')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Modify</button>
                                <button name="delete" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Cancel</button>';
                    }else if($reservation['statut'] === "Rejected"){
                        $getColor = 'red';
                        $getButtons = '<button name="delete" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Delete</button>';
                    }
                    
                    echo '<tr class="border-b">
                            <td class="py-4 px-6">'.$reservation['name'].'</td>
                            <td class="py-4 px-6">'.$reservation['lieu_charge'].'</td>
                            <td class="py-4 px-6">'.$reservation['date_start'].'</td>
                            <td class="py-4 px-6">'.$reservation['date_end'].'</td>
                            <td class="py-4 px-6 text-'.$getColor.'-600"><span class="bg-'.$getColor.'-200 py-1 px-3 rounded-[50px]">'.$reservation['statut'].'</span></td>
                            <td class="py-4 px-6">
                                '.$getButtons.'
                            </td>
                        </tr>';
                }
            }else{
                echo 'Faild to get data';
            }
        }


        public function editReserve($lieu,$start,$end,$getId){

            $checkID = $this->database->prepare("SELECT * FROM reservation WHERE id_reservation = :idReserve");
            $checkID->bindParam("idReserve",$getId);
            if($checkID->execute()){
                $reserve = $checkID->fetch(PDO::FETCH_ASSOC);
                if($reserve['statut'] != "Rejected"){
                    $sql2 = "UPDATE reservation SET date_start = :startDate ,date_end = :endDate ,lieu_charge = :place ,statut = 'Pending' WHERE id_reservation = :getId";
                    $editFunction = $this->database->prepare($sql2);
                    $editFunction->bindParam(":startDate",$start);
                    $editFunction->bindParam(":endDate",$end);
                    $editFunction->bindParam(":place",$lieu);
                    $editFunction->bindParam(":getId",$getId);
                    if($editFunction->execute()){
                        echo '<script>Location.replace("reservation.php")</script>';
                    }else{
                        echo 'Faild to edit try again';
                    }
                }else{
                echo '<script>alert("You are not able to edit this reservation")</script>';
                }
            }else{
                echo '<script>alert("Error try again later")</script>';
            }
            
        }

        

        
    }

