<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reservations - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <?php
            require_once '../commands/header.php';
         ?>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- My Reservations Section -->
            <section id="my-reservations" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">My Reservations</h2>
                
                <!-- Reservation Table -->
                <table class="w-full bg-white shadow-lg rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="py-3 px-6">Vehicle</th>
                            <th class="py-3 px-6">Pickup Date</th>
                            <th class="py-3 px-6">Return Date</th>
                            <th class="py-3 px-6">Status</th>
                            <th class="py-3 px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Reservation Item 1 -->
                        <tr class="border-b">
                            <td class="py-4 px-6">Luxury Sedan</td>
                            <td class="py-4 px-6">2024-01-15</td>
                            <td class="py-4 px-6">2024-01-20</td>
                            <td class="py-4 px-6 text-green-600">Confirmed</td>
                            <td class="py-4 px-6">
                                <button onclick="openModifyPopup('Luxury Sedan', '2024-01-15', '2024-01-20')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Modify</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Cancel</button>
                            </td>
                        </tr>

                        <!-- Reservation Item 2 -->
                        <tr class="border-b">
                            <td class="py-4 px-6">SUV</td>
                            <td class="py-4 px-6">2024-01-10</td>
                            <td class="py-4 px-6">2024-01-15</td>
                            <td class="py-4 px-6 text-yellow-600">Pending</td>
                            <td class="py-4 px-6">
                                <button onclick="openModifyPopup('SUV', '2024-01-10', '2024-01-15')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Modify</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Cancel</button>
                            </td>
                        </tr>

                        <!-- Additional Reservation Items... -->
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <!-- Modify Reservation Popup -->
    <div id="modifyPopup" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white rounded-lg p-6 w-96">
            <h3 class="text-2xl font-semibold mb-4">Modify Reservation</h3>
            <form action="modify-reservation.php" method="POST">
                <div class="mb-4">
                    <label for="vehicle" class="block text-gray-700">Vehicle</label>
                    <input type="text" id="vehicle" name="vehicle" class="w-full px-4 py-2 border border-gray-300 rounded-lg" disabled>
                </div>
                <div class="mb-4">
                    <label for="pickupDate" class="block text-gray-700">Pickup Date</label>
                    <input type="date" id="pickupDate" name="pickupDate" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="returnDate" class="block text-gray-700">Return Date</label>
                    <input type="date" id="returnDate" name="returnDate" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="closeModifyPopup()" class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-500">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Open Modify Popup with Pre-filled Data
        function openModifyPopup(vehicle, pickupDate, returnDate) {
            document.getElementById("vehicle").value = vehicle;
            document.getElementById("pickupDate").value = pickupDate;
            document.getElementById("returnDate").value = returnDate;
            document.getElementById("modifyPopup").classList.remove("hidden");
        }

        // Close Modify Popup
        function closeModifyPopup() {
            document.getElementById("modifyPopup").classList.add("hidden");
        }
    </script>
</body>
</html>
