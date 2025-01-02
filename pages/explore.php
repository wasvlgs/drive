<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Vehicles - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <?php
            require_once '../commands/header.php';
         ?>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- Explore Section -->
            <section id="explore" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Explore Vehicles</h2>
                
                <!-- Filter Options (Optional) -->
                <div class="mb-6">
                    <div class="flex gap-4">
                        <select class="p-2 border rounded">
                            <option value="">All Categories</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="convertible">Convertible</option>
                        </select>

                        <select class="p-2 border rounded">
                            <option value="">Sort by Price</option>
                            <option value="low-high">Low to High</option>
                            <option value="high-low">High to Low</option>
                        </select>
                    </div>
                </div>

                <!-- Vehicle List -->
                <div id="afficher" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                    <!-- Vehicle Card -->
                    <!-- <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="car1.jpg" alt="Luxury Sedan" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Luxury Sedan</h3>
                            <p class="text-gray-600">Starting at $50/day</p>
                            <a href="vehicle-details.html" class="text-blue-600 hover:underline">View Details</a>
                            <br>
                            <a href="reservation.html" class="mt-4 block text-center py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700">Reserve Now</a>
                        </div>
                    </div>

                    
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="car2.jpg" alt="SUV" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold">SUV</h3>
                            <p class="text-gray-600">Starting at $75/day</p>
                            <a href="vehicle-details.html" class="text-blue-600 hover:underline">View Details</a>
                            <br>
                            <a href="reservation.html" class="mt-4 block text-center py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700">Reserve Now</a>
                        </div>
                    </div>

                    
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="car3.jpg" alt="Convertible" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Convertible</h3>
                            <p class="text-gray-600">Starting at $90/day</p>
                            <a href="vehicle-details.html" class="text-blue-600 hover:underline">View Details</a>
                            <br>
                            <a href="reservation.html" class="mt-4 block text-center py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700">Reserve Now</a>
                        </div>
                    </div> -->

                    <!-- More Vehicle Cards Here... -->
                </div>

                <!-- Pagination Section -->
                    <div class="mt-8 flex justify-center">
                        <nav aria-label="Pagination">
                            <ul id="buttonsAffichage" class="flex items-center space-x-4">
                                <!-- Previous Button -->
                                <!-- <li>
                                    <a href="#" class="flex items-center justify-center px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">
                                        ← Previous
                                    </a>
                                </li> -->

                                <!-- Page Numbers -->
                                <!-- <li>
                                    <a href="#" class="px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">1</a>
                                </li>
                                <li>
                                    <a href="#" class="px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">2</a>
                                </li>
                                <li>
                                    <a href="#" class="px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">3</a>
                                </li>
                                <li>
                                    <a href="#" class="px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">4</a>
                                </li> -->

                                <!-- Next Button -->
                                <!-- <li>
                                    <a href="#" class="flex items-center justify-center px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">
                                        Next →
                                    </a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>

            </section>
        </main>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded",()=>{

        let afficherSection = document.getElementById("afficher");
        let buttonsAffichage = document.getElementById("buttonsAffichage");
        fetch('../commands/afficher.php')
        .then(response => response.json())
        .then(data=>{
            afficherSection.innerHTML = '';
            if(data.length > 0){
                data.forEach(element => {
                afficherSection.innerHTML += `<div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="car2.jpg" alt="SUV" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold">${element.name}</h3>
                            <p class="text-gray-600">Starting at $75/day</p>
                            <a href="vehicle-details.html" class="text-blue-600 hover:underline">View Details</a>
                            <br>
                            <a href="reservation.html" class="mt-4 block text-center py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700">Reserve Now</a>
                        </div>
                    </div>`;
                });
            }

            for(let i = 1; i <= Math.ceil(data.length/3); i++){
                buttonsAffichage.innerHTML += `<li>
                    <a href="#" class="px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-blue-600 hover:text-white transition duration-300">1</a>
                </li>`;
            }
            
        })
        
    })

    </script>
</body>
</html>
