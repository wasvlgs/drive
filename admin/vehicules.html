<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Vehicles - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="flex justify-between items-center">
            <!-- Greeting -->
            <div class="text-xl font-semibold">Welcome, Admin</div>
            <!-- Logout Link -->
            <a href="logout.html" class="text-white hover:text-blue-300">🚪 Logout</a>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-600 text-white min-h-screen p-6">
            <h1 class="text-2xl font-bold mb-6">Drive & Loc</h1>
            <nav>
                <ul class="space-y-4">
                    <li><a href="dashboard.html" class="block hover:text-blue-300">🏠 Dashboard</a></li>
                    <li><a href="manage-vehicles.html" class="block hover:text-blue-300">🚗 Manage Vehicles</a></li>
                    <li><a href="manage-reservations.html" class="block hover:text-blue-300">🛣️ Manage Reservations</a></li>
                    <li><a href="manage-reviews.html" class="block hover:text-blue-300">📝 Manage Reviews</a></li>
                    <li><a href="manage-categories.html" class="block hover:text-blue-300">📂 Manage Categories</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- Manage Vehicles Section -->
            <section id="manage-vehicles" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Manage Vehicles</h2>

                <!-- Button to Add New Vehicle -->
                <div class="mb-6">
                    <button onclick="openAddModal()" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-500">+ Add New Vehicle</button>
                </div>

                <!-- Vehicles Table -->
                <table class="min-w-full bg-white border-collapse shadow-lg rounded-lg">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="py-3 px-6">Vehicle Name</th>
                            <th class="py-3 px-6">Category</th>
                            <th class="py-3 px-6">Price per Day</th>
                            <th class="py-3 px-6">Availability</th>
                            <th class="py-3 px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Vehicle Row (Loop through vehicles here) -->
                        <tr>
                            <td class="py-4 px-6">Luxury Sedan</td>
                            <td class="py-4 px-6">Sedan</td>
                            <td class="py-4 px-6">$50</td>
                            <td class="py-4 px-6">Available</td>
                            <td class="py-4 px-6 flex space-x-4">
                                <button onclick="openEditModal('Luxury Sedan', 'Sedan', 50, 'Available')" class="bg-yellow-600 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Modify</button>
                                <button onclick="deleteVehicle('Luxury Sedan')" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <!-- Add Vehicle Modal -->
    <div id="addVehicleModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white p-6 rounded-lg w-96">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Add New Vehicle</h3>
            <form>
                <div class="mb-4">
                    <label for="vehicle-name" class="block text-gray-700">Vehicle Name</label>
                    <input type="text" id="vehicle-name" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter vehicle name" required>
                </div>
                <div class="mb-4">
                    <label for="vehicle-category" class="block text-gray-700">Category</label>
                    <input type="text" id="vehicle-category" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter vehicle category" required>
                </div>
                <div class="mb-4">
                    <label for="vehicle-price" class="block text-gray-700">Price per Day</label>
                    <input type="number" id="vehicle-price" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter price" required>
                </div>
                <div class="mb-4">
                    <label for="vehicle-availability" class="block text-gray-700">Availability</label>
                    <select id="vehicle-availability" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="closeAddModal()" class="px-4 py-2 mr-4 bg-gray-400 text-white rounded-md">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Add Vehicle</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Vehicle Modal -->
    <div id="editVehicleModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white p-6 rounded-lg w-96">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Edit Vehicle</h3>
            <form>
                <div class="mb-4">
                    <label for="edit-vehicle-name" class="block text-gray-700">Vehicle Name</label>
                    <input type="text" id="edit-vehicle-name" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="edit-vehicle-category" class="block text-gray-700">Category</label>
                    <input type="text" id="edit-vehicle-category" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="edit-vehicle-price" class="block text-gray-700">Price per Day</label>
                    <input type="number" id="edit-vehicle-price" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="edit-vehicle-availability" class="block text-gray-700">Availability</label>
                    <select id="edit-vehicle-availability" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="closeEditModal()" class="px-4 py-2 mr-4 bg-gray-400 text-white rounded-md">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Update Vehicle</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Open Add Vehicle Modal
        function openAddModal() {
            document.getElementById('addVehicleModal').classList.remove('hidden');
        }

        // Close Add Vehicle Modal
        function closeAddModal() {
            document.getElementById('addVehicleModal').classList.add('hidden');
        }

        // Open Edit Vehicle Modal
        function openEditModal(name, category, price, availability) {
            document.getElementById('edit-vehicle-name').value = name;
            document.getElementById('edit-vehicle-category').value = category;
            document.getElementById('edit-vehicle-price').value = price;
            document.getElementById('edit-vehicle-availability').value = availability;
            document.getElementById('editVehicleModal').classList.remove('hidden');
        }

        // Close Edit Vehicle Modal
        function closeEditModal() {
            document.getElementById('editVehicleModal').classList.add('hidden');
        }

        // Delete Vehicle
        function deleteVehicle(name) {
            alert('Vehicle ' + name + ' has been deleted.');
            // Add logic for deleting vehicle from the backend
        }
    </script>
</body>
</html>
