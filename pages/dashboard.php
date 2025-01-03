






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
                                
                             ?>
                        </h3>
                        <p class="text-gray-600">Active Reservations</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-2xl font-bold text-blue-600">15</h3>
                        <p class="text-gray-600">Vehicles Reviewed</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-2xl font-bold text-blue-600">3</h3>
                        <p class="text-gray-600">Upcoming Reservations</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <h3 class="text-2xl font-bold text-blue-600">$300</h3>
                        <p class="text-gray-600">Total Spent</p>
                    </div>
                </div>
            </section>

            <!-- Explore Section -->
            <section id="explore" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Explore Vehicles</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Vehicle Card -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="car1.jpg" alt="Luxury Sedan" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Luxury Sedan</h3>
                            <p class="text-gray-600">Starting at $50/day</p>
                            <a href="#details" class="text-blue-600 hover:underline">View Details</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="car2.jpg" alt="SUV" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold">SUV</h3>
                            <p class="text-gray-600">Starting at $75/day</p>
                            <a href="#details" class="text-blue-600 hover:underline">View Details</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="car3.jpg" alt="Convertible" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Convertible</h3>
                            <p class="text-gray-600">Starting at $90/day</p>
                            <a href="#details" class="text-blue-600 hover:underline">View Details</a>
                        </div>
                    </div>
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
                        <tr class="border-b">
                            <td class="py-4 px-6">Luxury Sedan</td>
                            <td class="py-4 px-6">2024-01-15</td>
                            <td class="py-4 px-6">2024-01-20</td>
                            <td class="py-4 px-6 text-green-600">Confirmed</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-4 px-6">SUV</td>
                            <td class="py-4 px-6">2024-01-10</td>
                            <td class="py-4 px-6">2024-01-15</td>
                            <td class="py-4 px-6 text-yellow-600">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- My Reviews Section -->
            <section id="reviews">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">My Reviews</h2>
                <div class="space-y-4">
                    <!-- Review Item -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="font-bold text-gray-800">Luxury Sedan</h3>
                        <p class="text-gray-600">"Great car! Smooth ride and very comfortable."</p>
                        <div class="text-yellow-500 mt-2">★★★★★</div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="font-bold text-gray-800">SUV</h3>
                        <p class="text-gray-600">"Perfect for family trips. Spacious and reliable."</p>
                        <div class="text-yellow-500 mt-2">★★★★☆</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
