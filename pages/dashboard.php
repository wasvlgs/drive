






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
        <?php
            require_once '../commands/header.php';
            require_once '../commands/clientStatique.php';

            $callFunction = new getClientStatique($conn->getConnect(),$getID);
        ?>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- Welcome Section -->
            <section id="dashboard" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome Back, <?php echo $getName; ?>!</h2>
                <p class="text-gray-600">Here’s a quick summary of your account and activity.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                    <!-- Stats Cards -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-2xl font-bold text-blue-600">
                            <?php
                                echo $callFunction->getActiveReservation();
                             ?>
                        </h3>
                        <p class="text-gray-600">Active Reservations</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-2xl font-bold text-blue-600">
                            <?php
                                echo $callFunction->getReviews();
                             ?>
                        </h3>
                        <p class="text-gray-600">Vehicles Reviewed</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-2xl font-bold text-blue-600">
                            <?php
                                echo $callFunction->getPendingReservation();
                             ?>
                        </h3>
                        <p class="text-gray-600">Pending Reservations</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-2xl font-bold text-blue-600"><?php
                                echo $callFunction->getRejectedReservation();
                             ?></h3>
                        <p class="text-gray-600">Rejected Reservations</p>
                    </div>
                </div>
            </section>

            <!-- Explore Section -->
            <section id="explore" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Explore Vehicles</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php $callFunction->showVehicules(); ?>
                    
                </div>
            </section>

            <!-- My Reservations Section -->
            <section id="reservations" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">My Reservations</h2>
                <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="py-3 px-6">Vehicle</th>
                            <th class="py-3 px-6">Pickup Date</th>
                            <th class="py-3 px-6">Return Date</th>
                            <th class="py-3 px-6">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $callFunction->showReservation(); ?>

                    </tbody>
                </table>
            </section>

            <!-- My Reviews Section -->
            <section id="reviews">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">My Reviews</h2>
                <div class="space-y-4">
                    <?php $callFunction->showReviews(); ?>
                    <!-- Review Item -->
                    <!-- <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="font-bold text-gray-800">Luxury Sedan</h3>
                        <p class="text-gray-600">"Great car! Smooth ride and very comfortable."</p>
                        <div class="text-yellow-500 mt-2">★★★★★</div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="font-bold text-gray-800">SUV</h3>
                        <p class="text-gray-600">"Perfect for family trips. Spacious and reliable."</p>
                        <div class="text-yellow-500 mt-2">★★★★☆</div>
                    </div> -->
                </div>
            </section>
        </main>
    </div>
</body>
</html>
