


<?php 


    if(isset($_GET['car'])){
        

    }else{
        die();
    }


    class getCar{

        private $carId;
        private $database;

        public function __construct($db)
        {
            $this->carId = $_GET['car'];
            $this->database = $db;
        }


        public function getInformation(){

            $sql = "SELECT * FROM vehicule INNER JOIN categorie ON vehicule.id_categorie = categorie.id_categorie WHERE id_vehicule = :vehicule";
            $getInfo = $this->database->prepare($sql);
            $getInfo->bindParam(":vehicule",$this->carId);
            if($getInfo->execute() && $getInfo->rowCount() === 1){
                return $getInfo->fetch(PDO::FETCH_ASSOC);
            }else{
                die("No car exict!");
            }
        }
    }


    include_once '../database.php';
    $conn = new database;
    $connCard = new getCar($conn->getConnect());

    $data = $connCard->getInformation();



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-semibold">Drive & Loc</div>
            <div>
                <a href="index.html" class="text-white hover:text-blue-300 px-4">Home</a>
                <a href="manage-vehicles.html" class="text-white hover:text-blue-300 px-4">Manage Vehicles</a>
                <a href="logout.html" class="text-white hover:text-blue-300 px-4">🚪 Logout</a>
            </div>
        </div>
    </header>

    <!-- Car Details Section -->
    <div class="container mx-auto py-12 px-5">
        <div class="flex flex-col lg:flex-row justify-between items-center space-y-8 lg:space-y-0">
            <!-- Car Image Section -->
            <div class="w-full lg:w-1/2 max-h-[550px] flex justify-center items-center overflow-hidden">
                <img src="../img/imgPages/<?php echo $data['imgSrc']; ?>" alt="Car Image" class="w-full h-auto rounded-lg shadow-lg">
            </div>

            <!-- Car Information Section -->
            <div class="w-full lg:w-1/2 space-y-6 px-6">
                <h2 class="text-4xl font-semibold text-gray-800"><?php echo $data['name']; ?></h2>
                <p class="text-xl text-gray-600"><?php echo $data['description']; ?></p>

                <!-- Car Specifications -->
                <div class="space-y-4">
                    <div class="flex justify-between text-gray-800">
                        <span class="font-medium">Category:</span>
                        <span><?php echo $data['nom']; ?></span>
                    </div>
                    <div class="flex justify-between text-gray-800">
                        <span class="font-medium">Price per Day:</span>
                        <span>$<?php echo $data['prix']; ?></span>
                    </div>
                    <div class="flex justify-between text-gray-800">
                        <span class="font-medium">Availability:</span>
                        <span><?php
                            if($data['disponibilite'] == 1){
                                echo 'Available';
                            }else{
                                echo 'Not available';
                            }
                         ?></span>
                    </div>
                    <div class="flex justify-between text-gray-800">
                        <span class="font-medium">Modele:</span>
                        <span><?php echo $data['modele']; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservation Form -->
        <section class="mt-12">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Reserve This Car</h3>
            <form method="POST" class="space-y-6">
                <!-- Full Name -->
                <div class="flex flex-col">
                    <label for="lieuDeCharge" class="text-gray-700 font-medium mb-2">Lieu de charge</label>
                    <input type="text" id="lieuDeCharge" name="lieuDeCharge" class="w-full p-3 border border-gray-300 rounded-md" required>
                </div>

               

                <!-- Reservation Dates -->
                <div class="flex space-x-6">
                    <div class="flex flex-col w-1/2">
                        <label for="start-date" class="text-gray-700 font-medium mb-2">Start Date</label>
                        <input type="date" id="start-date" name="startDate" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="flex flex-col w-1/2">
                        <label for="end-date" class="text-gray-700 font-medium mb-2">End Date</label>
                        <input type="date" id="end-date" name="endDate" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button name="reserve" type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-500">Reserve Now</button>
                </div>
            </form>
        </section>

        <?php 

            require_once '../database.php';
            require_once '../commands/reserve.php';

            if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['reserve'])){
                $lieu = htmlspecialchars($_POST['lieuDeCharge']);
                $startDate = htmlspecialchars($_POST['startDate']);
                $endDate = htmlspecialchars($_POST['endDate']);
                $conn = new database();
                $getConn = $conn->getConnect();
                $reserve = new reserve($lieu,$startDate,$endDate,$getConn);
            }
        
        
        
        
        
        
        
        ?>

        <!-- Customer Reviews Section -->
        <section class="mt-12">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Customer Reviews</h3>
            <div class="space-y-8">
                <div class="flex space-x-4">
                    <div class="flex-shrink-0">
                        <img src="user-avatar.jpg" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="space-y-2">
                        <div class="text-gray-800 font-semibold">John Doe</div>
                        <div class="text-gray-600">"This sedan was amazing! Super comfortable for my trip to the mountains. Highly recommend!"</div>
                        <div class="text-yellow-400">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="flex-shrink-0">
                        <img src="user-avatar.jpg" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="space-y-2">
                        <div class="text-gray-800 font-semibold">Jane Smith</div>
                        <div class="text-gray-600">"Perfect for city driving. Clean and stylish. Worth every penny!"</div>
                        <div class="text-yellow-400">⭐⭐⭐⭐</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Drive & Loc. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
